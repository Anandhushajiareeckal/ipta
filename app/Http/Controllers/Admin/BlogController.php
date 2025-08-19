<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('admin.blog.create');
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
            $image->move(public_path('uploads/blog'), $name);
            $main_img = 'uploads/blog/' . $name;
        }
        Blog::create([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            'main_head' => 'required|string|max:255',
            'main_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc' => 'nullable|string',
            'banner_desc' => 'nullable|string',
        ]);
        $main_img = $blog->main_img;
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/blog'), $name);
            $main_img = 'uploads/blog/' . $name;
        }
        $blog->update([
            'main_head' => $request->main_head,
            'main_img' => $main_img,
            'main_desc' => $request->main_desc,
            'banner_desc' => $request->banner_desc,
        ]);
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->main_img) {
            $imgPath = public_path($blog->main_img);
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
