<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IptaTheatre;

class IptaTheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iptaTheatres = IptaTheatre::paginate(10);
        return view('admin.ipta_theatre.index', compact('iptaTheatres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ipta_theatre.create');
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
            $image->move(public_path('uploads/ipta_theatre'), $name);
            $main_img = 'uploads/ipta_theatre/' . $name;
        }

        IptaTheatre::create([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);

        return redirect()->route('admin.ipta-theatre.index')->with('success', 'IPTA Theatre created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IptaTheatre $iptaTheatre)
    {
        return view('admin.ipta_theatre.edit', compact('iptaTheatre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IptaTheatre $iptaTheatre)
    {
        $request->validate([
            'main_head' => 'required|string|max:255',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc' => 'nullable|string',
            'banner_desc' => 'nullable|string',
        ]);

        $main_img = $iptaTheatre->main_img;
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/ipta_theatre'), $name);
            $main_img = 'uploads/ipta_theatre/' . $name;
        }

        $iptaTheatre->update([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);

        return redirect()->route('admin.ipta-theatre.index')->with('success', 'IPTA Theatre updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IptaTheatre $iptaTheatre)
    {
        $iptaTheatre->delete();

        return redirect()->route('admin.ipta-theatre.index')->with('success', 'IPTA Theatre deleted successfully.');
    }
}
