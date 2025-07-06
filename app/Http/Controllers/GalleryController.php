<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $section = Gallery::where('page_key', 'section_1')->firstOrFail();
        return view('admin.gallery.galleryone', compact('section'));
    }

    public function updateSection1(Request $request, $id)
    {
        $section = Gallery::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_2' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_3' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload Media 1
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media && file_exists(public_path('uploads/gallery/' . $section->media))) {
                unlink(public_path('uploads/gallery/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Upload Media 2
        if ($request->hasFile('media_2')) {
            $file = $request->file('media_2');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_2 && file_exists(public_path('uploads/gallery/' . $section->media_2))) {
                unlink(public_path('uploads/gallery/' . $section->media_2));
            }

            $section->media_2 = $fileName;
        }

        // Upload Media 3
        if ($request->hasFile('media_3')) {
            $file = $request->file('media_3');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_3 && file_exists(public_path('uploads/gallery/' . $section->media_3))) {
                unlink(public_path('uploads/gallery/' . $section->media_3));
            }

            $section->media_3 = $fileName;
        }



        // Update other fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Gallery Section 1 updated successfully.');
    }


    public function gallery2(Request $request)
    {
        $section = Gallery::where('page_key', 'section_2')->firstOrFail();

        return view('admin.gallery.gallerytwo', compact('section'));
    }

    public function updateSection2(Request $request, $id)
    {
        $section = Gallery::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload Media
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            // Delete old image if exists
            if ($section->media && file_exists(public_path('uploads/gallery/' . $section->media))) {
                unlink(public_path('uploads/gallery/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Update other fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Gallery section updated successfully.');
    }


    public function gallery3(Request $request)
    {
        $section = Gallery::where('page_key', 'section_3')->firstOrFail();
        return view('admin.gallery.gallerythree', compact('section'));
    }

    public function updateSection3(Request $request, $id)
    {
        $section = Gallery::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_2' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_3' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload Media 1
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media && file_exists(public_path('uploads/gallery/' . $section->media))) {
                unlink(public_path('uploads/gallery/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Upload Media 2
        if ($request->hasFile('media_2')) {
            $file = $request->file('media_2');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_2 && file_exists(public_path('uploads/gallery/' . $section->media_2))) {
                unlink(public_path('uploads/gallery/' . $section->media_2));
            }

            $section->media_2 = $fileName;
        }

        // Upload Media 3
        if ($request->hasFile('media_3')) {
            $file = $request->file('media_3');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_3 && file_exists(public_path('uploads/gallery/' . $section->media_3))) {
                unlink(public_path('uploads/gallery/' . $section->media_3));
            }

            $section->media_3 = $fileName;
        }

        // Update Title only
        $section->title = $validated['title'];
        $section->save();

        return redirect()->back()->with('success', 'Gallery Section updated successfully.');
    }


    public function gallery4(Request $request)
    {
        $section = Gallery::where('page_key', 'section_4')->firstOrFail();
        return view('admin.gallery.galleryfour', compact('section'));
    }

    public function updateSection4(Request $request, $id)
    {

        $section = Gallery::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_2' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'media_3' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload Media 1
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media && file_exists(public_path('uploads/gallery/' . $section->media))) {
                unlink(public_path('uploads/gallery/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Upload Media 2
        if ($request->hasFile('media_2')) {
            $file = $request->file('media_2');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_2 && file_exists(public_path('uploads/gallery/' . $section->media_2))) {
                unlink(public_path('uploads/gallery/' . $section->media_2));
            }

            $section->media_2 = $fileName;
        }

        // Upload Media 3
        if ($request->hasFile('media_3')) {
            $file = $request->file('media_3');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/gallery'), $fileName);

            if ($section->media_3 && file_exists(public_path('uploads/gallery/' . $section->media_3))) {
                unlink(public_path('uploads/gallery/' . $section->media_3));
            }

            $section->media_3 = $fileName;
        }

        // Update Title only
        $section->title = $validated['title'];
        $section->save();

        return redirect()->back()->with('success', 'Gallery Section updated successfully.');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
