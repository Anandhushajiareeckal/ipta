<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);
        return view('frontend.events.index', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        // Related events: same logic as articles, e.g., latest except current
        $relatedEvents = Event::where('id', '!=', $event->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Recent events: latest 5
        $recentEvents = Event::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Trending events: could be latest or by some other logic
        $trendingEvents = Event::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('frontend.events.show', compact('event', 'relatedEvents', 'recentEvents', 'trendingEvents'));
    }

}
