<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\CampaignMember;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Show The Detail of the Event
     */
    public function show(Campaign $campaign)
    {
        $campaign->load('members.leadership');

        $voted = $campaign->votes()->where('campaign_member_votes.user_id', auth()->id())->first();

        return view('user.campaign', ['campaign' => $campaign, 'voted' => $voted]);
    }

    public function store(Campaign $campaign, CampaignMember $member)
    {
        auth()->user()->votes()->create([
            'campaign_member_id' => $member->id
        ]);

        session()->flash('status', 'You Successfully Voted For ' . $member->leadership->name . '.');
        return redirect()->back();
    }
}
