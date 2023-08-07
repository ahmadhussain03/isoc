<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Leadership;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $event = Event::query()->orderBy('date', 'desc')->first();
        return view('welcome', ['event' => $event]);
    }

    public function upcoming(Request $request)
    {
        $events = Event::query()->whereDate('date', '>=', now())->orderBy('date', 'desc')->limit(10)->get();
        $firstEvent = $events->shift();
        return view('upcoming-events', ['events' => $events, 'firstEvent' => $firstEvent, 'title' => 'Upcoming Events']);
    }

    public function past(Request $request)
    {
        $events = Event::query()->whereDate('date', '<', now())->orderBy('date', 'desc')->limit(10)->get();
        $firstEvent = $events->shift();

        return view('upcoming-events', ['events' => $events, 'firstEvent' => $firstEvent, 'title' => 'Past Events']);
    }

    public function leadership(Request $request)
    {
        $president = Leadership::query()->where('type', 'president')->where('is_elected', true)->first();
        $vicePresident = Leadership::query()->where('type', 'vice_president')->where('is_elected', true)->first();
        $generalSecretary = Leadership::query()->where('type', 'general_secretary')->where('is_elected', true)->first();
        $treasurer = Leadership::query()->where('type', 'treasurer')->where('is_elected', true)->first();
        return view('leadership', compact('president', 'vicePresident', 'treasurer', 'generalSecretary'));
    }

    public function bod(Request $request)
    {
        $bods = Leadership::query()->where('type', 'bod')->where('is_elected', true)->get();
        return view('bod', ['bods' => $bods]);
    }
}
