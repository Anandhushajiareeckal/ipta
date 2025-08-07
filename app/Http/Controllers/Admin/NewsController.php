<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index()
    {
        // Logic to fetch news articles can be added here
        $news = News::paginate(10); 
        $breadcrumbs = [
            [__('Dashboard'), route('admin.dashboard')],
            [__('News'), route('admin.news.index')],
        ];

        return view('admin.news.index', compact('news', 'breadcrumbs')); 
    }

    public function create()
    {
        return view('admin.news.create'); // Assuming you have a view for creating news
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
        ]);

        // Handle image upload if present
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/news'), $imageName);
            $validated['main_img'] = 'uploads/news/' . $imageName;
        }

        News::create($validated);

        return redirect()->back()->with('success', 'News article created successfully');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',compact('news')); // Assuming you have a view for editing news
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
        ]);

        // Handle image upload if present
        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/news'), $imageName);
            $validated['main_img'] = 'uploads/news/' . $imageName;
        } else {
            unset($validated['main_img']);
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully');
    }

    public function destroy($id)
    {
        // Logic to delete the news article can be added here
    }
}
