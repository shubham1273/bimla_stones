<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->description = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/clients'), $filename);

            // Optional: Delete old file
            if ($client->photo && file_exists(public_path('uploads/home/' . $client->photo))) {
                unlink(public_path('uploads/home/' . $client->photo));
            }

            $client->photo = $filename;
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client added successfully.');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->description = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/clients'), $filename);

            // Optional: Delete old photo
            if ($client->photo && file_exists(public_path('uploads/clients/' . $client->photo))) {
                unlink(public_path('uploads/clients/' . $client->photo));
            }

            $client->photo = $filename;
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        if ($client->photo && file_exists(public_path('uploads/clients/' . $client->photo))) {
            unlink(public_path('uploads/clients/' . $client->photo));
        }

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
