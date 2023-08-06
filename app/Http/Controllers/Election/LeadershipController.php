<?php

namespace App\Http\Controllers\Election;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $leadershipQuery = Leadership::query();

        if ($request->ajax()) {
            if (!$request->has('type')) return response()->json([]);

            $leadershipQuery->where('type', $request->type)->where('is_elected', false);

            if ($request->has('search')) {
                $leadershipQuery->where('name', 'LIKE', '%' . $request->search . '%');
            }

            return response()->json($leadershipQuery->paginate(10));
        }

        return view('election.leadership.index', ['leaderships' => $leadershipQuery->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('election.leadership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:president,vice_president,general_secretary,treasurer,bod',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('leaderships'), $imageName);

        Leadership::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'image' => $imageName
        ]);

        session()->flash('status', 'Leadership Created Successfully!');

        return redirect()->route('election.comission.leadership.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Leadership $leadership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leadership $leadership)
    {
        return view('election.leadership.edit', ['leadership' => $leadership]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leadership $leadership)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:president,vice_president,general_secretary,treasurer,bod',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->has('image')) {
            if (file_exists(public_path('leaderships/' . $leadership->image))) {
                unlink(public_path('leaderships/' . $leadership->image));
            }

            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('leaderships'), $imageName);

            $leadership->image = $imageName;
        }

        $leadership->name = $request->name;
        $leadership->description = $request->description;

        $leadership->save();

        session()->flash('status', 'Leadership Updated Successfully!');

        return redirect()->route('election.comission.leadership.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leadership $leadership)
    {
        $leadership->delete();

        session()->flash('status', 'Leadership Elected Successfully!');

        return redirect()->route('election.comission.leadership.index');
    }
}
