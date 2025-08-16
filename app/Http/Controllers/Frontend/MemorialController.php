<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memorial;

class MemorialController extends Controller
{

    public function index($type)
    {
        $memorials = Memorial::where('type', $type)->paginate(10);
        return view('frontend.memorials.index', compact('memorials', 'type'));
    }

    public function show($type, $slug)
    {
        $memorial = Memorial::where('type', $type)->where('slug', $slug)->firstOrFail();
        $relatedMemorials = Memorial::where('type', $type)
            ->where('id', '!=', $memorial->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        $recentMemorials = Memorial::where('type', $type)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $trendingMemorials = Memorial::where('type', $type)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('frontend.memorials.show', compact('memorial', 'relatedMemorials', 'recentMemorials', 'trendingMemorials', 'type'));
    }
}
