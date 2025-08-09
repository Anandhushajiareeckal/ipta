<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(8);
        return view('frontend.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $relatedArticles = Article::where('id', '!=', $article->id)->latest()->take(3)->get();
        $recentArticles = Article::where('id', '!=', $article->id)->latest()->take(4)->get();
        $trendingArticles = Article::where('id', '!=', $article->id)->latest()->take(3)->get();

        return view('frontend.articles.single', compact('article', 'relatedArticles', 'recentArticles', 'trendingArticles'));
    }
}
