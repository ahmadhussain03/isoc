<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Show The Detail of the Event
     */
    public function show(Event $event)
    {
        $isAttended = $event->users()->wherePivot('user_id', auth()->id())->exists();

        if (!$isAttended) {
            auth()->user()->events()->attach($event, ['attended_at' => now()]);
        }


        return view('user.event', ['is_attended' => $isAttended, 'event' => $event]);
    }
}
