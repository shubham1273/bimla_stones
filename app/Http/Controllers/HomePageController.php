<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageController extends Controller
{
    public function index(Request $request){
        $section = HomePage::where('page_key', 'section_1')->firstOrFail();
        return view('admin.home.homepageone', compact('section'));
    }
    public function updateSection1(Request $request, $id)
    {
        $section = HomePage::findOrFail($id);

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
            $file->move(public_path('uploads/home'), $fileName);

            // Delete old image if exists
            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Update other fields
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Home Section 1 updated successfully.');
    }

    public function vidoes(Request $request)
    {
        $section = HomePage::where('page_key', 'section_2')->firstOrFail();
        return view('admin.home.homepagetwo', compact('section'));
    }

    public function updateSection2(Request $request, $id)
    {
        $section = HomePage::findOrFail($id);

        // Validate video file
        $validated = $request->validate([
            'media' => 'required|mimes:mp4,webm,ogg|max:512000', // 500MB max size
        ]);

        // Handle video upload
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home'), $fileName);

            // Delete old video if exists
            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $fileName;
            $section->media_type = 'video'; // Optional: Track media type
        }

        $section->save();

        return redirect()->back()->with('success', 'Video updated successfully.');
    }

    public function process(Request $request)
    {
        $section = HomePage::where('page_key', 'section_3')->firstOrFail();
        return view('admin.home.homepagethree', compact('section'));
    }

    public function updateSection3(Request $request, $id)
    {
        $section = HomePage::findOrFail($id);

        // Validate inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:mp4,webm,ogg|max:512000',
            'media_2' => 'nullable|mimes:mp4,webm,ogg|max:512000',
            'media_3' => 'nullable|mimes:mp4,webm,ogg|max:512000',
        ]);

        // Upload Video 1
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home'), $fileName);

            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Upload Video 2
        if ($request->hasFile('media_2')) {
            $file2 = $request->file('media_2');
            $fileName2 = time() . '_2_' . uniqid() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('uploads/home'), $fileName2);

            if ($section->media_2 && file_exists(public_path('uploads/home/' . $section->media_2))) {
                unlink(public_path('uploads/home/' . $section->media_2));
            }

            $section->media_2 = $fileName2;
        }

        // Upload Video 3
        if ($request->hasFile('media_3')) {
            $file3 = $request->file('media_3');
            $fileName3 = time() . '_3_' . uniqid() . '.' . $file3->getClientOriginalExtension();
            $file3->move(public_path('uploads/home'), $fileName3);

            if ($section->media_3 && file_exists(public_path('uploads/home/' . $section->media_3))) {
                unlink(public_path('uploads/home/' . $section->media_3));
            }

            $section->media_3 = $fileName3;
        }

        // Save title & description
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 3 updated successfully.');
    }


    public function whoWeare(Request $request)
    {
        $section = HomePage::where('page_key', 'section_4')->firstOrFail();
        return view('admin.home.homepagefour', compact('section'));
    }

    public function updateSection4(Request $request, $id)
    {
        $section = HomePage::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 4 updated successfully.');
    }


    public function specialization(Request $request)
    {
        $section = HomePage::where('page_key', 'section_5')->first();
        return view('admin.home.homepagefive', compact('section'));
    }

    public function updateSection5(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:mp4,webm,ogg|max:512000' // 500MB max
        ]);

        $section = HomePage::findOrFail($id);
        $section->title = $request->title;
        $section->description = $request->description;

        // If file uploaded, handle upload
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/home'), $filename);

            // Optional: Delete old file
            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $filename;
        }

        $section->save();

        return redirect()->back()->with('success', 'Section 5 updated successfully.');
    }


    public function offer(Request $request)
    {
        $offers = HomePage::where('page_key', 'section_6')->get();
        return view('admin.home.homepagesix', compact('offers'));
    }

    public function offerEdit($id)
    {
        $section = HomePage::where('page_key', 'section_6')->findOrFail($id);
        return view('admin.home.homepagesixEdit', compact('section'));
    }

    public function updateSection6(Request $request, $id)
    {
        $section = HomePage::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'media' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home'), $fileName);

            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->save();

        return redirect()->route('offer')->with('success', 'Offer section updated successfully.');
    }

    public function choose(Request $request)
    {
        $section = HomePage::where('page_key', 'section_7')->first();

        return view('admin.home.homepageseven', compact('section'));
    }


    public function updateSection7(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:mp4,webm,ogg|max:512000' // 500 MB
        ]);

        $section = HomePage::findOrFail($id);
        $section->title = $request->title;
        $section->description = $request->description;

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/home'), $filename);

            // Optionally delete old video
            if ($section->media && file_exists(public_path('uploads/home/' . $section->media))) {
                unlink(public_path('uploads/home/' . $section->media));
            }

            $section->media = $filename;
        }

        $section->save();

        return redirect()->back()->with('success', 'Section updated successfully.');
    }
}
