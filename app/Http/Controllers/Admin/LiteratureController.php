<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Literature;

class LiteratureController extends Controller
{
    public function index()
    {
        $literatures = Literature::latest()->paginate(10);
        return view('admin.literature.index', compact('literatures'));
    }
    public function create()
    {
        $types = ['poem', 'story', 'book review'];
        return view('admin.literature.create', compact('types'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:poem,story,book review',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/literature'), $name);
                $images[] = 'uploads/literature/' . $name;
            }
        }
        Literature::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'images' => $images,
        ]);
        return redirect()->route('admin.literature.index')->with('success', 'Literature created successfully.');
    }
    public function edit($id)
    {
        $literature = Literature::findOrFail($id);
        $types = ['poem', 'story', 'book review'];
        return view('admin.literature.edit', compact('literature', 'types'));
    }
    public function update(Request $request, $id)
    {
        $literature = Literature::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:poem,story,book review',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $images = $literature->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/literature'), $name);
                $images[] = 'uploads/literature/' . $name;
            }
        }
        $literature->update([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'images' => $images,
        ]);
        return redirect()->route('admin.literature.index')->with('success', 'Literature updated successfully.');
    }
    public function destroy($id)
    {
        $literature = Literature::findOrFail($id);
        if ($literature->images) {
            foreach ($literature->images as $img) {
                $imgPath = public_path($img);
                if (file_exists($imgPath)) {
                    unlink($imgPath);
                }
            }
        }
        $literature->delete();
        return redirect()->route('admin.literature.index')->with('success', 'Literature deleted successfully.');
    }
}
