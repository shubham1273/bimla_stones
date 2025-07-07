<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = GeneralSetting::orderBy('key')->where('key', '!=', 'novocare_video')->get();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the settings.
     */
    public function update(Request $request)
    {
        foreach ($request->except('_token') as $id => $input) {
            $setting = GeneralSetting::find($id);

            if (!$setting) {
                continue;
            }

            if ($setting->type === 'text') {
                $setting->value = $input;
            } elseif ($setting->type === 'image' || $setting->type === 'file' || $setting->type === 'video') {
                if ($request->hasFile($id)) {

                    if ($setting->type === 'image') {
                        $request->validate([
                            $id => 'mimes:jpg,jpeg,png|max:5120', // Max 5MB
                        ]);
                    }

                    if ($setting->type === 'file') {
                        $request->validate([
                            $id => 'mimes:pdf,doc,docx,txt|max:10240', // Max 10MB
                        ]);
                    }

                    if ($setting->type === 'video') {
                        $request->validate([
                            $id => 'mimes:mp4,webm,ogg|max:51200', // Max 50MB
                        ]);
                    }

                    // Delete old file if exists
                    if ($setting->value && file_exists(public_path($setting->value))) {
                        unlink(public_path($setting->value));
                    }

                    // Upload new file
                    $file = $request->file($id);
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/settings'), $filename);
                    $setting->value = 'uploads/settings/' . $filename;
                }
            }

            $setting->save();
        }

        return redirect()->back()->with('success', 'Records updated successfully.');
    }
}
