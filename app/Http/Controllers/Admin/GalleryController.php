<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/gallery'), $name);
                $images[] = 'uploads/gallery/' . $name;
            }
        }

        Gallery::create([
            'title' => $request->title,
            'images' => $images,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = $gallery->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/gallery'), $name);
                $images[] = 'uploads/gallery/' . $name;
            }
        }

        $gallery->update([
            'title' => $request->title,
            'images' => $images,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->images) {
            foreach ($gallery->images as $img) {
                $imgPath = public_path($img);
                if (file_exists($imgPath)) {
                    unlink($imgPath);
                }
            }
        }
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
