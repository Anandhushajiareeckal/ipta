<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Blog;
use App\Models\Literature;

class HomeController extends Controller
        
{
    public function index()
    {
        $breakingNews = News::where('category', 'Breaking News')->latest()->take(5)->get();
        $latestNewsCollection = News::where('category', 'Latest News')->latest()->take(5)->get();
        $firstLatestNews = $latestNewsCollection->first();
        $otherLatestNews = $latestNewsCollection->slice(1);
        $trendingNewsCollection = News::where('category', 'Trending News')->latest()->take(5)->get();
        $firstTrendingNews = $trendingNewsCollection->first();
        $otherTrendingNews = $trendingNewsCollection->slice(1);
        $latestBlogs = Blog::latest()->take(5)->get();
        $hotNewsCollection = News::where('category', 'Hot')->latest()->take(5)->get();
        $firstHotNews = $hotNewsCollection->first();
        $otherHotNews = $hotNewsCollection->slice(1);
        $latestArticles = \App\Models\Article::latest()->take(5)->get();
        $eventsCollection = \App\Models\Event::latest()->take(8)->get();
        $firstEvent = $eventsCollection->first();
        $otherEvents = $eventsCollection->slice(1);
        $videos = \App\Models\Video::latest()->take(7)->get();
        $poems = Literature::where('type', 'Poem')->latest()->take(5)->get();
        return view('frontend.home.index', compact(
            'breakingNews', 
            'firstLatestNews', 
            'otherLatestNews', 
            'firstTrendingNews', 
            'otherTrendingNews', 
            'latestBlogs', 
            'latestArticles',
            'firstHotNews',
            'otherHotNews',
            'firstEvent',
            'otherEvents',
            'videos',
            'poems'
        ));
    }
}
