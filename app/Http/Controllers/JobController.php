<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsOpening;

class JobController extends Controller
{

    public function index()
    {
        $jobs = JobsOpening::all();
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        JobsOpening::create($validated);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }

    public function edit(JobsOpening $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, JobsOpening $job)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }

    public function destroy(JobsOpening $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }

}
