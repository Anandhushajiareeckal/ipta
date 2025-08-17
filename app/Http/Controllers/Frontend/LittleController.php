<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Little;

class LittleController extends Controller
{
    public function index()
    {
        $littles = Little::latest()->paginate(12);
        return view('frontend.little.index', compact('littles'));
    }
    public function show($slug)
    {
        $little = Little::where('slug', $slug)->firstOrFail();
        // Related items: exclude current
        $relatedLittles = Little::where('id', '!=', $little->id)->latest()->take(3)->get();
        // Recent littles (latest 5, exclude current)
        $recentLittles = Little::where('id', '!=', $little->id)->latest()->take(5)->get();
        // Trending littles (for demo, latest 5, exclude current)
        $trendingLittles = Little::where('id', '!=', $little->id)->latest()->take(5)->get();
        return view('frontend.little.show', compact('little', 'relatedLittles', 'recentLittles', 'trendingLittles'));
    }
}
