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
        $about = About::firstOrCreate();

        // Validate input
        $validated = $request->validate([
            'banner_head' => 'nullable|string|max:255',
            'banner_description' => 'nullable|string',
            'main_head' => 'nullable|string|max:255',
            'main_description' => 'nullable|string',
            'head_2' => 'nullable|string|max:255',
            'our' => 'nullable|string|max:255',
            // Add more validation rules as needed
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle banner_image upload
        if ($request->hasFile('banner_image')) {
            $path = $request->file('banner_image')->store('about', 'public');
            $validated['banner_image'] = $path;
        }

        // Handle main_image upload
        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('about', 'public');
            $validated['main_image'] = $path;
        }

        // Handle image_2 upload
        if ($request->hasFile('image_2')) {
            $path = $request->file('image_2')->store('about', 'public');
            $validated['image_2'] = $path;
        }

        // Loop for sub_head and sub_desc fields
        for ($i = 1; $i <= 3; $i++) {
            $validated["sub_head_$i"] = $request->input("sub_head_$i");
            $validated["sub_desc_$i"] = $request->input("sub_desc_$i");
        }

        // Loop for rank_value and rank_text fields
        for ($i = 1; $i <= 4; $i++) {
            $validated["rank_value_$i"] = $request->input("rank_value_$i");
            $validated["rank_text_$i"] = $request->input("rank_text_$i");
        }

        // Save all fields
        $about->fill($validated);
        $about->save();

        return redirect()->back()->with('success', 'About page updated successfully!');
    }
}
