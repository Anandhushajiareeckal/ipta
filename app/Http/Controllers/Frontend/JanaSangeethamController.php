<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JanaSangeetham;

class JanaSangeethamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $janaSangeethams = JanaSangeetham::latest()->paginate(10);
        return view('frontend.jana_sangeetham.index', compact('janaSangeethams'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $janaSangeetham = JanaSangeetham::where('slug', $slug)->firstOrFail();

        $relatedJanaSangeethams = JanaSangeetham::where('id', '!=', $janaSangeetham->id)
            ->latest()
            ->take(3)
            ->get();

        $recentJanaSangeethams = JanaSangeetham::latest()
            ->take(5)
            ->get();

        $trendingJanaSangeethams = JanaSangeetham::inRandomOrder()
            ->take(5)
            ->get();

        return view('frontend.jana_sangeetham.show', compact('janaSangeetham', 'relatedJanaSangeethams', 'recentJanaSangeethams', 'trendingJanaSangeethams'));
    }
}
