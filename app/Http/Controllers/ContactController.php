<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactExport;
use App\Mail\ContactEnquiryMail;
use Illuminate\Support\Facades\Mail;



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

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'company_name' => $request->company,
            'location' => $request->location,
        ]);
// dump('sdfvg');
        // Send email using Blade template
        $m = Mail::to('shubham.feb.1995@gmail.com')->send(new ContactEnquiryMail([
            'name' => $contact->name,
            'email' => $contact->email,
            'phone' => $contact->phone_number,
            'company' => $contact->company_name,
            'location' => $contact->location,
        ]));
// dd($m);
        return response()->json(['success' => true, 'message' => 'Your enquiry has been submitted successfully.']);

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

    public function export()
    {
        return Excel::download(new ContactExport, 'contact_enquiries.xlsx');
    }
}
