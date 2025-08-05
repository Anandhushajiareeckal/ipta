<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function edit()
    {
        $data = About::first();
        $breadcrumbs = [
            [__('Dashboard'), route('admin.dashboard')],
            [__('About Us'), null],
        ];
        return view('admin.about.edit', compact('data', 'breadcrumbs')); 
    }

    public function update(Request $request)
    {
        $about = \App\Models\About::first();
        $about->update($request->except(['banner_image', 'main_image', 'image_2']));
        // Handle file uploads here...
        return redirect()->back()->with('success', 'About page updated!');
    }
}
