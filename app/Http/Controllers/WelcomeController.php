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
        $event = Event::query()->whereDate('date', '>=', now())->orderBy('date', 'desc')->limit(10);
        return view('upcoming-events', ['event' => $event]);
    }

    public function leadership(Request $request)
    {
        $leaderships = Leadership::query()->whereNot('type', 'bod')->where('is_elected', true)->get();
        return view('leadership', ['leaderships' => $leaderships]);
    }

    public function bod(Request $request)
    {
        $bods = Leadership::query()->where('type', 'bod')->where('is_elected', true)->get();
        return view('bod', ['bods' => $bods]);
    }
}
