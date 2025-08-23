<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function edit()
    {
        $settings = Setting::first();
        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'favicon' => 'nullable|image|mimes:png,ico',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|string',
        ]);
        $settings = Setting::first();
        $phoneArr = array_map('trim', explode(',', $request->input('phone')));
        $emailArr = array_map('trim', explode(',', $request->input('email')));
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'phone' => json_encode($phoneArr),
            'email' => json_encode($emailArr),
        ];
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/settings'), $imageName);
            $data['logo'] = 'uploads/settings/' . $imageName;
        }
        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $faviconName = time() . '_' . $favicon->getClientOriginalName();
            $favicon->move(public_path('uploads/settings'), $faviconName);
            $data['favicon'] = 'uploads/settings/' . $faviconName;
        }
        if ($settings) {
            $settings->update($data);
        } else {
            Setting::create($data);
        }
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
