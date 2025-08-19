<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Blog;

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
        $latestArticles = \App\Models\Article::latest()->take(5)->get();
        return view('frontend.home.index', compact('breakingNews', 'firstLatestNews', 'otherLatestNews', 'firstTrendingNews', 'otherTrendingNews', 'latestBlogs', 'latestArticles'));
    }
    
}
