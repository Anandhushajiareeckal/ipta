<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'banner_desc' => 'required|string',
            'map_url' => 'required|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        $contact = Contact::first();
        $media = json_encode([
            'instagram' => $request->input('instagram'),
            'facebook' => $request->input('facebook'),
            'whatsapp' => $request->input('whatsapp'),
        ]);

        $data = [
            'banner_desc' => $request->input('banner_desc'),
            'map_url' => $request->input('map_url'),
            'social_media' => $media,
            'description' => $request->input('description'),
        ];
        if ($request->hasFile('banner_img')) {
            $image = $request->file('banner_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/contact'), $imageName);
            $data['banner_img'] = 'uploads/contact/' . $imageName;
        }

        if ($contact) {
            $contact->update($data);
        } else {
            Contact::create($data);
        }
        return redirect()->back()->with('success', 'Contact updated successfully');
    }
}
