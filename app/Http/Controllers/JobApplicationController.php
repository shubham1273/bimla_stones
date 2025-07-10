<?php

namespace App\Http\Controllers;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'position' => 'required|array',
            'position.*' => 'string|max:255',
            'cover_letter_message' => 'nullable|string',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $job = new JobApplication();
        $job->name = $validated['name'];
        $job->phone_number = $validated['phone_number'];
        $job->email = $validated['email'];
        $job->position = implode(', ', $validated['position']);
        $job->cover_letter_message = $validated['cover_letter_message'] ?? null;

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/resumes'), $fileName);
            $job->resume = $fileName;
        }

        $job->save();

        // Send email to admin
        Mail::to('shubham.feb.1995@gmail.com')->send(new JobApplicationMail($job));

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully!',
        ]);
    }

    public function index()
    {
        $applications = JobApplication::where('status', 'active')->latest()->get();
        return view('admin.job_application.index', compact('applications'));
    }

    public function destroy($id)
    {
        $job = JobApplication::findOrFail($id);
        $job->status = 'deleted';
        $job->save();

        return redirect()->back()->with('success', 'Application deleted.');
    }
}
