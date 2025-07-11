<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GetInTouchExport;

use App\Models\GetInTouch;
use Illuminate\Http\Request;
use App\Mail\GetInTouchMail;
use Illuminate\Support\Facades\Mail;

class GetInTouchController extends Controller
{
    // Store form submission
    public function store(Request $request)
    {
            $request->validate([
                'full_name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'company_name' => 'nullable|string|max:255',
                'looking_for' => 'required|array',
                'looking_for.*' => 'string',
                'email' => 'required|email|max:255',
                'location' => 'nullable|string|max:255',
                'details' => 'nullable|string',
                'reference_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
            ]);

            $imageName = null;
            if ($request->hasFile('reference_image')) {
                $file = $request->file('reference_image');
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/get_in_touch'), $imageName);
            }

            $getInTouch = GetInTouch::create([
                'name' => $request->full_name,
                'phone_number' => $request->phone,
                'company_name' => $request->company_name,
                'looking_for' => implode(', ', $request->looking_for),
                'email' => $request->email,
                'location' => $request->location,
                'specific_detail' => $request->details,
                'reference_image' => $imageName,
            ]);

            Mail::to(config('mail.from.address'))->send(new GetInTouchMail($getInTouch));

            return back()->with('success', 'Enquiry submitted successfully.')->withInput();

    }

    // Admin listing
    public function index()
    {
        $enquiries = GetInTouch::where('status', 'active')->latest()->paginate(10);
        return view('admin.get_in_touch.index', compact('enquiries'));
    }

    // Soft delete
    public function destroy($id)
    {
        $enquiry = GetInTouch::findOrFail($id);
        $enquiry->status = 'deleted';
        $enquiry->save();

        return redirect()->back()->with('success', 'Enquiry deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new GetInTouchExport, 'get_in_touch_enquiries.xlsx');
    }
}
