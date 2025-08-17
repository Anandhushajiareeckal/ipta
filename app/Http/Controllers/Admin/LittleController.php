<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Little;

class LittleController extends Controller
{
    public function index()
    {
        $littles = Little::latest()->paginate(10);
        return view('admin.little.index', compact('littles'));
    }
    public function create()
    {
        return view('admin.little.create');
    }
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
            $image->move(public_path('uploads/little'), $name);
            $main_img = 'uploads/little/' . $name;
        }
        Little::create([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);
        return redirect()->route('admin.little.index')->with('success', 'Little created successfully.');
    }
    public function edit($id)
    {
        $little = Little::findOrFail($id);
        return view('admin.little.edit', compact('little'));
    }
    public function update(Request $request, $id)
    {
        $little = Little::findOrFail($id);
        $request->validate([
            'main_head' => 'required|string|max:255',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc' => 'nullable|string',
            'banner_desc' => 'nullable|string',
        ]);
        $main_img = $little->main_img;
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/little'), $name);
            $main_img = 'uploads/little/' . $name;
        }
        $little->update([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);
        return redirect()->route('admin.little.index')->with('success', 'Little updated successfully.');
    }
    public function destroy($id)
    {
        $little = Little::findOrFail($id);
        if ($little->main_img) {
            $imgPath = public_path($little->main_img);
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        $little->delete();
        return redirect()->route('admin.little.index')->with('success', 'Little deleted successfully.');
    }
}
