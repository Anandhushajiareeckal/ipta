<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Literature;

class LiteratureController extends Controller
{
    public function index($type)
    {
        $literatures = Literature::where('type', $type)->latest()->paginate(12);
        return view('frontend.literature.index', compact('literatures', 'type'));
    }

    public function show($type, $slug)
    {
        $literature = Literature::where('type', $type)->where('slug', $slug)->firstOrFail();
        // Related items: same type, exclude current
        $relatedLiterature = Literature::where('type', $type)
            ->where('id', '!=', $literature->id)
            ->latest()->take(3)->get();
        // Recent literature (latest 5, exclude current)
        $recentLiterature = Literature::where('type', $type)
            ->where('id', '!=', $literature->id)
            ->latest()->take(5)->get();
        // Trending literature (for demo, latest 5, exclude current)
        $trendingLiterature = Literature::where('type', $type)
            ->where('id', '!=', $literature->id)
            ->latest()->take(5)->get();
        return view('frontend.literature.show', compact('literature', 'relatedLiterature', 'recentLiterature', 'trendingLiterature', 'type'));
    }
}
