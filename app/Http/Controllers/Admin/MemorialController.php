<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memorial;

class MemorialController extends Controller
{
    public function index()
    {
        $memorials = Memorial::paginate(10);
        return view('admin.memorials.index', compact('memorials'));
    }

    public function create()
    {
        $types = ['anusmarana kurippu', 'jeeva charithram'];
        return view('admin.memorials.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            'type'         => 'required|in:anusmarana kurippu,jeeva charithram',
        ]);

        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/memorials'), $imageName);
            $validated['main_img'] = 'uploads/memorials/' . $imageName;
        }

        Memorial::create($validated);
        return redirect()->route('admin.memorials.index')->with('success', 'Memorial created successfully.');
    }

    public function edit($id)
    {
        $memorial = Memorial::findOrFail($id);
        $types = ['anusmarana kurippu', 'jeeva charithram'];
        return view('admin.memorials.edit', compact('memorial', 'types'));
    }

    public function update(Request $request, $id)
    {
        $memorial = Memorial::findOrFail($id);
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            'type'         => 'required|in:anusmarana kurippu,jeeva charithram',
        ]);

        if ($request->hasFile('main_img')) {
            if ($memorial->main_img && file_exists(public_path($memorial->main_img))) {
                unlink(public_path($memorial->main_img));
            }
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/memorials'), $imageName);
            $validated['main_img'] = 'uploads/memorials/' . $imageName;
        } else {
            unset($validated['main_img']);
        }

        $memorial->update($validated);
        return redirect()->route('admin.memorials.index')->with('success', 'Memorial updated successfully.');
    }

    public function destroy($id)
    {
        $memorial = Memorial::findOrFail($id);
        if ($memorial->main_img && file_exists(public_path($memorial->main_img))) {
            unlink(public_path($memorial->main_img));
        }
        $memorial->delete();
        return redirect()->route('admin.memorials.index')->with('success', 'Memorial deleted successfully.');
    }
}
