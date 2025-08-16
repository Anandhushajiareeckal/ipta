<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cultural;

class CulturalController extends Controller
{
    public function index()
    {
        $culturals = Cultural::paginate(10);
        return view('admin.culturals.index', compact('culturals'));
    }

    public function create()
    {
        return view('admin.culturals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            'slug'         => 'required|string|max:255|unique:culturals,slug',
        ]);

        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/culturals'), $imageName);
            $validated['main_img'] = 'uploads/culturals/' . $imageName;
        }

        Cultural::create($validated);
        return redirect()->route('admin.culturals.index')->with('success', 'Cultural created successfully.');
    }

    public function edit($id)
    {
        $cultural = Cultural::findOrFail($id);
        return view('admin.culturals.edit', compact('cultural'));
    }

    public function update(Request $request, $id)
    {
        $cultural = Cultural::findOrFail($id);
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            'slug'         => 'required|string|max:255|unique:culturals,slug,' . $id,
        ]);

        if ($request->hasFile('main_img')) {
            if ($cultural->main_img && file_exists(public_path($cultural->main_img))) {
                unlink(public_path($cultural->main_img));
            }
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/culturals'), $imageName);
            $validated['main_img'] = 'uploads/culturals/' . $imageName;
        } else {
            unset($validated['main_img']);
        }

        $cultural->update($validated);
        return redirect()->route('admin.culturals.index')->with('success', 'Cultural updated successfully.');
    }

    public function destroy($id)
    {
        $cultural = Cultural::findOrFail($id);
        if ($cultural->main_img && file_exists(public_path($cultural->main_img))) {
            unlink(public_path($cultural->main_img));
        }
        $cultural->delete();
        return redirect()->route('admin.culturals.index')->with('success', 'Cultural deleted successfully.');
    }
}
