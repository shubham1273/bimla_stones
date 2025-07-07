<?php

namespace App\Http\Controllers;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'position' => 'nullable|string',
            'cover_letter_message' => 'nullable|string',
            'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $job = new JobApplication($validated);

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/resumes'), $fileName);
            $job->resume = $fileName;
        }

        $job->save();

        return redirect()->back()->with('success', 'Application submitted successfully!');
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
