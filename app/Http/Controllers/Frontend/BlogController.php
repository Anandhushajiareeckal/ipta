<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(8);
        return view('frontend.blog.index', compact('blogs'));
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlogs = Blog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        $recentBlogs = Blog::where('id', '!=', $blog->id)->latest()->take(4)->get();
        $trendingBlogs = Blog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        return view('frontend.blog.single', compact('blog', 'relatedBlogs', 'recentBlogs', 'trendingBlogs'));
    }
}
