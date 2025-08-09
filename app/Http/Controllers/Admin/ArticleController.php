<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
        ]);

        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/articles'), $imageName);
            $validated['main_img'] = 'uploads/articles/' . $imageName;
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
        ]);

        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/articles'), $imageName);
            $validated['main_img'] = 'uploads/articles/' . $imageName;
        } else {
            unset($validated['main_img']);
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->main_img && file_exists(public_path($article->main_img))) {
            unlink(public_path($article->main_img));
        }
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
