<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(8);
        return view('frontend.news.index',compact('news')); // Assuming you have a view for news
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        // Related news: latest 3 except current
        $relatedNews = News::where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        // Recent news: latest 4 except current
        $recentNews = News::where('id', '!=', $news->id)
            ->latest()
            ->take(4)
            ->get();

        // Trending news: latest 3 except current (customize as needed)
        $trendingNews = News::where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.news.single', compact('news', 'relatedNews', 'recentNews', 'trendingNews')); // Assuming you have a view for single news
    }
}
