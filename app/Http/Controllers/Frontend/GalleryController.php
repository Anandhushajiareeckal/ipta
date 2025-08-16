<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('frontend.gallery.index', compact('galleries'));
    }

    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->firstOrFail();
        return view('frontend.gallery.show', compact('gallery'));
    }
}
