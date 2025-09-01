<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JanaSangeetham;

class JanaSangeethamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $janaSangeethams = JanaSangeetham::paginate(10);
        return view('admin.jana_sangeetham.index', compact('janaSangeethams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jana_sangeetham.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_head' => 'required|string|max:255',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc' => 'nullable|string',
            'banner_desc' => 'nullable|string',
        ]);

        $main_img = null;
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/jana_sangeetham'), $name);
            $main_img = 'uploads/jana_sangeetham/' . $name;
        }

        JanaSangeetham::create([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);

        return redirect()->route('admin.jana-sangeetham.index')->with('success', 'Jana Sangeetham created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JanaSangeetham $janaSangeetham)
    {
        return view('admin.jana_sangeetham.edit', compact('janaSangeetham'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JanaSangeetham $janaSangeetham)
    {
        $request->validate([
            'main_head' => 'required|string|max:255',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc' => 'nullable|string',
            'banner_desc' => 'nullable|string',
        ]);

        $main_img = $janaSangeetham->main_img;
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/jana_sangeetham'), $name);
            $main_img = 'uploads/jana_sangeetham/' . $name;
        }

        $janaSangeetham->update([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);

        return redirect()->route('admin.jana-sangeetham.index')->with('success', 'Jana Sangeetham updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JanaSangeetham $janaSangeetham)
    {
        $janaSangeetham->delete();

        return redirect()->route('admin.jana-sangeetham.index')->with('success', 'Jana Sangeetham deleted successfully.');
    }
}
