<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index()
    {
        $founders = Founder::latest()->paginate(10);
        return view('admin.founders.index', compact('founders'));
    }

    public function create()
    {
        return view('admin.founders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20', // ✅ Add phone validation
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        $founder = new Founder();
        $founder->name = $request->name;
        $founder->phone_number = $request->phone_number; // ✅ Save phone number
        $founder->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/founders'), $fileName);
            $founder->image = $fileName;
        }

        $founder->save();

        return redirect()->route('founders.index')->with('success', 'Founder added successfully.');
    }


    public function edit($id)
    {
        $founder = Founder::findOrFail($id);
        return view('admin.founders.edit', compact('founder'));
    }

    public function update(Request $request, $id)
    {
        $founder = Founder::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20', // ✅ Validate phone number
            'description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        $founder->name = $request->name;
        $founder->phone_number = $request->phone_number; // ✅ Save phone number
        $founder->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/founders'), $fileName);

            if ($founder->image && file_exists(public_path('uploads/founders/' . $founder->image))) {
                unlink(public_path('uploads/founders/' . $founder->image));
            }

            $founder->image = $fileName;
        }

        $founder->save();

        return redirect()->route('founders.index')->with('success', 'Founder updated successfully.');
    }


    public function destroy($id)
    {
        $founder = Founder::findOrFail($id);

        if ($founder->image && file_exists(public_path('uploads/founders/' . $founder->image))) {
            unlink(public_path('uploads/founders/' . $founder->image));
        }

        $founder->delete();

        return redirect()->route('founders.index')->with('success', 'Founder deleted successfully.');
    }
}
