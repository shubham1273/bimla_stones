<?php

namespace App\Http\Controllers;
use App\Models\Contact;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'consent' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'company_name' => $request->company,
            'location' => $request->location,
        ]);

        return back()->with('success', 'Your enquiry has been submitted successfully.');
    }

    public function index()
    {
        $contacts = Contact::where('status', 'active')->latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 'deleted';
        $contact->save();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }
}
