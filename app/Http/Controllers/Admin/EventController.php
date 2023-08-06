<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EventCreated;
use Illuminate\Support\Facades\Notification;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::query()->paginate(10);
        return view('admin.event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(Event $event)
    {
        $event->load('users');

        $users = $event->users()->paginate(10);

        return view('admin.event.show', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:events',
            'description' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'from_time' => 'required|date_format:H:i',
            'to_time' => 'required|after:from_time|date_format:H:i',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $imageName = time() . $request->image->getClientOriginalName();
        $request->image->move(public_path('events'), $imageName);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'date' => $request->date,
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
        ]);

        session()->flash('status', 'Event Created Successfully!');

        User::query()->whereNotIn('role', ['election_comission', 'admin'])->chunk(20, function ($users) use ($event) {
            Notification::send($users, new EventCreated($event));
        });


        return redirect()->route('admin.event.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:events,id,' . $event->id,
            'description' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'from_time' => 'required|date_format:H:i',
            'to_time' => 'required|after:from_time|date_format:H:i',
            'image' => 'sometimes|mimes:jpeg,png,jpg,gif'
        ]);

        if ($request->has('image')) {
            if (file_exists(public_path('events/' . $event->image))) {
                unlink(public_path('events/' . $event->image));
            }

            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('events'), $imageName);

            $event->image = $imageName;
        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->from_time = $request->from_time;
        $event->to_time = $request->to_time;

        $event->save();
        session()->flash('status', 'Event Updated Successfully!');

        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        session()->flash('status', 'Event Deleted Successfully!');
        return redirect()->back();
    }
}
