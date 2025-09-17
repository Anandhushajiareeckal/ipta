<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chithralokam;

class ChithralokamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chithralokams = Chithralokam::paginate(10);
        return view('frontend.chithralokam.index', compact('chithralokams'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $chithralokam = Chithralokam::where('slug', $slug)->firstOrFail();
        return view('frontend.chithralokam.show', compact('chithralokam'));
    }
}