<?php

namespace App\Http\Controllers;
use App\Models\AboutUsSection;

use Illuminate\Http\Request;

class AboutUsSectionController extends Controller
{
    public function section1()
    {
        $data = AboutUsSection::where('page_key', 'section_1')->first();
        return view('admin.about.section_1', compact('data'));
    }

    public function updateSection1(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 1 updated successfully.');
    }

    public function section2()
    {
        $data = AboutUsSection::where('page_key', 'section_2')->first();
        return view('admin.about.section_2', compact('data'));
    }

    public function updateSection2(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:mp4,webm,ogg|max:512000', // max:512000 KB = 500 MB
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_2_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
            $section->media_type = $file->getClientMimeType();
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 2 updated successfully.');
    }

    public function section3Index()
    {
        $products = AboutUsSection::where('page_key', 'section_3')->get();
        return view('admin.about.section_3_index', compact('products'));
    }

    public function section3Edit($id)
    {
        $data = AboutUsSection::findOrFail($id);
        return view('admin.about.section_3_edit', compact('data'));
    }

    public function updateSection3(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_3_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->route('about.section_3')->with('success', 'Section 3 updated successfully.');
    }

    public function section4()
    {
        $data = AboutUsSection::where('page_key', 'section_4')->first();
        return view('admin.about.section_4', compact('data'));
    }

    public function updateSection4(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_4_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 4 updated successfully.');
    }

    public function section5()
    {
        $data = AboutUsSection::where('page_key', 'section_5')->first();
        return view('admin.about.section_5', compact('data'));
    }

    public function updateSection5(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_5_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 5 updated successfully.');
    }

    public function section6()
    {
        $data = AboutUsSection::where('page_key', 'section_6')->first();
        return view('admin.about.section_6', compact('data'));
    }

    public function updateSection6(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_6_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 6 updated successfully.');
    }

        public function section7()
    {
        $data = AboutUsSection::where('page_key', 'section_7')->first();
        return view('admin.about.section_7', compact('data'));
    }

    public function updateSection7(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_7_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 7 updated successfully.');
    }

        public function leadershipIndex()
    {
        $products = AboutUsSection::where('page_key', 'our_leadership')->get();
        return view('admin.about.leadership_index', compact('products'));
    }

    public function leadershipCreate()
    {
        return view('admin.about.leadership_create');
    }

    public function leadershipStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $fileName = null;
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_leadership_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);
        }

        AboutUsSection::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'media' => $fileName,
            'media_type' => 'image',
            'page_key' => 'our_leadership',
        ]);

        return redirect()->route('about.leadership')->with('success', 'Leader added successfully.');
    }

    public function leadershipEdit($id)
    {
        $data = AboutUsSection::findOrFail($id);
        return view('admin.about.leadership_edit', compact('data'));
    }

    public function leadershipUpdate(Request $request, $id)
    {
        $section = AboutUsSection::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_leadership_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/about_us'), $fileName);

            if ($section->media && file_exists(public_path('uploads/about_us/' . $section->media))) {
                unlink(public_path('uploads/about_us/' . $section->media));
            }

            $section->media = $fileName;
        }

        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->route('about.leadership')->with('success', 'Leader updated successfully.');
    }

}
