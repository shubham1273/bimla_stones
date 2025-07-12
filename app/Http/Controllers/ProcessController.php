<?php

namespace App\Http\Controllers;
use App\Models\Process;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function section1(){
        $data = Process::where('page_key', 'section_1')->first();
        return view('admin.process.section_1', compact('data'));
    }

    public function updateSection1(Request $request, $id)
    {
        $section = Process::findOrFail($id);

        // Validate inputs (removed media)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        // Save title & description only
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 1 updated successfully.');
    }


    public function section2(){
        $data = Process::where('page_key', 'section_2')->get();
        return view('admin.process.section_2', compact('data'));
    }

    public function section2Create()
    {
        return view('admin.process.section_2_create');
    }

    public function section2Store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = new Process();
        $product->page_key = 'section_2';
        $product->media_type = 'image';
        $product->title = $validated['title'];
        $product->description = $request->description;

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);
            $product->media = $fileName;
        }

        $product->save();

        return redirect()->route('process.section_2')->with('success', 'Record added successfully.');
    }

    public function section2Edit($id)
    {
        $data = Process::findOrFail($id);
        return view('admin.process.section_2_edit', compact('data'));
    }

    public function updateSection2(Request $request, $id)
    {
        $section = Process::findOrFail($id);

        // Validate inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048', // 2MB max for image
        ]);

        // Upload Image
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);

            // Delete old file if it exists
            if ($section->media && file_exists(public_path('uploads/process/' . $section->media))) {
                unlink(public_path('uploads/process/' . $section->media));
            }

            $section->media = $fileName;
        }


        // Save title & description
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->route('process.section_2')->with('success', 'Record updated successfully.');
    }

    public function section3(){
        $data = Process::where('page_key', 'section_3')->first();
        return view('admin.process.section_3', compact('data'));
    }

    public function updateSection3(Request $request, $id)
    {
        $section = Process::findOrFail($id);

        // Validate inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'media' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048', // 2MB max for image
        ]);

        // Upload Image
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);

            // Delete old file if it exists
            if ($section->media && file_exists(public_path('uploads/process/' . $section->media))) {
                unlink(public_path('uploads/process/' . $section->media));
            }

            $section->media = $fileName;
        }


        // Save title & description
        $section->title = $validated['title'];
        $section->description = $validated['description'];
        $section->save();

        return redirect()->back()->with('success', 'Section 2 updated successfully.');
    }

    public function section4(){
        $data = Process::where('page_key', 'section_4')->first();
        return view('admin.process.section_4', compact('data'));
    }

    public function updateSection4(Request $request, $id)
    {
        $section = Process::findOrFail($id);

        // Validate inputs
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'media' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048', // 2MB max for image
        ]);

        // Upload Image
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_1_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);

            // Delete old file if it exists
            if ($section->media && file_exists(public_path('uploads/process/' . $section->media))) {
                unlink(public_path('uploads/process/' . $section->media));
            }

            $section->media = $fileName;
        }

        // Save title & description
        $section->title = $validated['title'];
        $section->save();

        return redirect()->back()->with('success', 'Section 4 updated successfully.');
    }


    public function index()
    {

        $items = Process::where('page_key', 'process_image')->get();
        return view('admin.processimage.index', compact('items'));
    }

    public function create()
    {
        return view('admin.processimage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'media' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = [
            'page_key' => 'process_image', // 🔐 Hardcoded page_key
        ];

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);
            $data['media'] = $fileName;
        }

        Process::create($data);

        return redirect()->route('process-images.index')->with('success', 'Image created successfully.');
    }


    public function edit(Process $process_image)
    {
        return view('admin.processimage.edit', ['item' => $process_image]);
    }

    public function update(Request $request, Process $process_image)
    {
        $request->validate([
            'media' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = [
            'page_key' => 'process_image', // ✅ Hardcoded here
        ];

        if ($request->hasFile('media')) {
            if ($process_image->media && file_exists(public_path('uploads/process/' . $process_image->media))) {
                unlink(public_path('uploads/process/' . $process_image->media));
            }

            $file = $request->file('media');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/process'), $fileName);
            $data['media'] = $fileName;
        }

        $process_image->update($data);

        return redirect()->route('process-images.index')->with('success', 'Image updated.');
    }


    public function destroy(Process $process_image)
    {
        if ($process_image->media && file_exists(public_path('uploads/process/' . $process_image->media))) {
            unlink(public_path('uploads/process/' . $process_image->media));
        }

        $process_image->delete();

        return redirect()->route('process-images.index')->with('success', 'Process image deleted.');
    }
}
