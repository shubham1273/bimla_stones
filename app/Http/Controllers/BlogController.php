<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|string',
            'blog_description' => 'required|string',
            'blog_image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['blog_image'] = $filename;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blog_title' => 'required|string',
            'blog_description' => 'required|string',
            'blog_image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $data['blog_image'] = $filename;

            if ($blog->blog_image && file_exists(public_path('uploads/blogs/' . $blog->blog_image))) {
                unlink(public_path('uploads/blogs/' . $blog->blog_image));
            }
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->blog_image && file_exists(public_path('uploads/blogs/' . $blog->blog_image))) {
            unlink(public_path('uploads/blogs/' . $blog->blog_image));
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }
}
