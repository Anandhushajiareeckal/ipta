<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            // 'banner_img'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'slug'         => 'required|string|max:255|unique:events,slug',
        ]);

        if ($request->hasFile('main_img')) {
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/events'), $imageName);
            $validated['main_img'] = 'uploads/events/' . $imageName;
        }
        if ($request->hasFile('banner_img')) {
            $banner = $request->file('banner_img');
            $bannerName = time() . '_' . $banner->getClientOriginalName();
            $banner->move(public_path('uploads/events'), $bannerName);
            $validated['banner_img'] = 'uploads/events/' . $bannerName;
        }

        Event::create($validated);
        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $validated = $request->validate([
            'main_head'    => 'required|string|max:255',
            'main_img'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_desc'    => 'nullable|string',
            'banner_desc'  => 'nullable|string',
            // 'banner_img'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'slug'         => 'required|string|max:255|unique:events,slug,' . $id,
        ]);

        if ($request->hasFile('main_img')) {
            // Delete old image
            if ($event->main_img && file_exists(public_path($event->main_img))) {
                unlink(public_path($event->main_img));
            }
            $image = $request->file('main_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/events'), $imageName);
            $validated['main_img'] = 'uploads/events/' . $imageName;
        } else {
            unset($validated['main_img']);
        }
        if ($request->hasFile('banner_img')) {
            // Delete old banner image
            if ($event->banner_img && file_exists(public_path($event->banner_img))) {
                unlink(public_path($event->banner_img));
            }
            $banner = $request->file('banner_img');
            $bannerName = time() . '_' . $banner->getClientOriginalName();
            $banner->move(public_path('uploads/events'), $bannerName);
            $validated['banner_img'] = 'uploads/events/' . $bannerName;
        } else {
            unset($validated['banner_img']);
        }

        $event->update($validated);
        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        // Delete images from directory if exist
        $imageFields = ['main_img', 'banner_img'];
        foreach ($imageFields as $field) {
            if ($event->$field && file_exists(public_path($event->$field))) {
                @unlink(public_path($event->$field));
            }
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }
}
