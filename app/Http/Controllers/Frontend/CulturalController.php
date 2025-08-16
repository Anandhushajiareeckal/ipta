<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cultural;

class CulturalController extends Controller
{
    public function index()
    {
        $culturals = Cultural::paginate(10);
        return view('frontend.culturals.index', compact('culturals'));
    }

    public function show($slug)
    {
        $cultural = Cultural::where('slug', $slug)->firstOrFail();
        $relatedCulturals = Cultural::where('id', '!=', $cultural->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        $recentCulturals = Cultural::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $trendingCulturals = Cultural::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('frontend.culturals.show', compact('cultural', 'relatedCulturals', 'recentCulturals', 'trendingCulturals'));
    }
}
