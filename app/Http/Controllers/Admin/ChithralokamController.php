<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chithralokam;

class ChithralokamController extends Controller
{
    public function index()
    {
        $chithralokams = Chithralokam::latest()->paginate(10);
        return view('admin.chithralokam.index', compact('chithralokams'));
    }

    public function create()
    {
        return view('admin.chithralokam.create');
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
                $image->move(public_path('uploads/chithralokam'), $name);
                $images[] = 'uploads/chithralokam/' . $name;
            }
        }

        Chithralokam::create([
            'title' => $request->title,
            'images' => $images,
        ]);

        return redirect()->route('admin.chithralokam.index')->with('success', 'Chithralokam created successfully.');
    }

    public function edit($id)
    {
        $chithralokam = Chithralokam::findOrFail($id);
        return view('admin.chithralokam.edit', compact('chithralokam'));
    }

    public function update(Request $request, $id)
    {
        $chithralokam = Chithralokam::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = $chithralokam->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/chithralokam'), $name);
                $images[] = 'uploads/chithralokam/' . $name;
            }
        }

        $chithralokam->update([
            'title' => $request->title,
            'images' => $images,
        ]);

        return redirect()->route('admin.chithralokam.index')->with('success', 'Chithralokam updated successfully.');
    }

    public function destroy($id)
    {
        $chithralokam = Chithralokam::findOrFail($id);
        if ($chithralokam->images) {
            foreach ($chithralokam->images as $img) {
                $imgPath = public_path($img);
                if (file_exists($imgPath)) {
                    unlink($imgPath);
                }
            }
        }
        $chithralokam->delete();
        return redirect()->route('admin.chithralokam.index')->with('success', 'Chithralokam deleted successfully.');
    }
}