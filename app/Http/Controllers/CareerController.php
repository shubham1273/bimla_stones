<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $section = Career::where('page_key', 'section_1')->firstOrFail();
        return view('admin.career.career1', compact('section'));
    }
    public function updateSection1(Request $request, $id)
    {
        $section = Career::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        // Update fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Career section updated successfully.');
    }


    public function career()
    {
        $section = Career::where('page_key', 'section_2')->firstOrFail();
        return view('admin.career.career2', compact('section'));
    }

    // Update Career Section
    public function updateSection2(Request $request, $id)
    {
        $section = Career::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        // File Upload
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/career'), $fileName);

            // Delete old image if exists
            if ($section->media && file_exists(public_path('uploads/career/' . $section->media))) {
                unlink(public_path('uploads/career/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Update other fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Career Section updated successfully.');
    }
}
