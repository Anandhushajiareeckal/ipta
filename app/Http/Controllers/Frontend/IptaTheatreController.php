<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\IptaTheatre;

class IptaTheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iptaTheatres = IptaTheatre::paginate(10);
        return view('frontend.ipta_theatre.index', compact('iptaTheatres'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $iptaTheatre = IptaTheatre::where('slug', $slug)->firstOrFail();
        $relatedIptaTheatres = IptaTheatre::where('id', '!=', $iptaTheatre->id)->latest()->take(3)->get();
        $recentIptaTheatres = IptaTheatre::latest()->take(5)->get();
        $trendingIptaTheatres = IptaTheatre::inRandomOrder()->take(5)->get();

        return view('frontend.ipta_theatre.show', compact('iptaTheatre', 'relatedIptaTheatres', 'recentIptaTheatres', 'trendingIptaTheatres'));
    }
}
