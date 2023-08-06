<?php

namespace App\Http\Controllers\Election;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Leadership;
use App\Models\User;
use App\Notifications\CampaignCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\ValidationException;

class CampaignController extends Controller
{

    private $campaignLimit = [
        'president' => 1,
        'vice_president' => 1,
        'general_secretary' => 1,
        'treasurer' => 1,
        'bod' => 10,
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::query()->with(['members.leadership', 'members.votes' => function ($query) {
            $query->select('campaign_member_id', DB::raw('COUNT(*) as vote_count'))
                ->groupBy('campaign_member_id')
                ->orderByDesc('vote_count')
                ->limit(1);
        }])
            ->withCount('votes')
            ->paginate(10);
        return view('election.campaign.index', ['campaigns' => $campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('election.campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:president,vice_president,general_secretary,treasurer,bod',
            'members' => 'array|required',
            'members.*' => 'required|integer|exists:leaderships,id,type,' . $request->type
        ]);

        $leaders = Leadership::query()->where('type', $request->type)->where('is_elected', true)->count();

        if ($leaders >= $this->campaignLimit[$request->type]) {
            throw ValidationException::withMessages(['type' => 'The Limit For ' . $request->president . ' is ' . $this->campaignLimit[$request->type] . '. Please Remove to Start Campaign.']);
        }

        return DB::transaction(function () use ($request) {

            $campaign = Campaign::create([
                'type' => $request->type
            ]);

            $leaderships = collect($request->members)->map(function ($member) {
                return ['leadership_id' => $member];
            })->toArray();

            $campaign->members()->createMany($leaderships);

            session()->flash('status', 'Campaign Started Successfully!');

            User::query()->whereIn('role', ['student', 'professional'])->where('status', 'active')->chunk(20, function ($users) use ($campaign) {
                Notification::send($users, new CampaignCreated($campaign));
            });

            return redirect()->route('election.comission.campaign.index');
        });
    }

    public function update(Campaign $campaign)
    {
        if ($campaign->status === 'completed') return redirect()->back();

        $winner = $campaign->members()->with('leadership')->withCount('votes')->orderBy('votes_count', 'desc')->first();

        if (!$winner) abort(400);

        $winner->leadership->is_elected = true;
        $winner->leadership->save();

        $campaign->status = 'completed';
        $campaign->save();

        session()->flash('status', 'Campaign Has Finished. The Winner is ' . $winner->leadership->name . '.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        $members = $campaign->members()->with(['leadership'])->withCount('votes')->paginate(10);

        return view('election.campaign.show', ['members' => $members]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        session()->flash('status', 'Campaign Deleted Successfully!');

        return redirect()->route('election.comission.campaign.index');
    }
}
