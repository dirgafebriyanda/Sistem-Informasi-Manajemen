<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    public function index()
    {
        return view('dashboard.galleries.index', [
            'title' => 'galleries',
            'active' => 'galleries',
            'galleries' => Gallery::all(), // Ubah dari 'service' menjadi 'Service'
        ]);
    }

    public function create()
    {
        return view('dashboard.galleries.create', [
            'title' => 'Galleries',
            'active' => 'galleries',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('gallery-images');
        }

        Gallery::create($data);

        return redirect('/dashboard/galleries')->with('success', 'New image has been added to the gallery!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view(
            'dashboard.galleries.edit',
            [
                'title' => 'Galleries',
                'active' => 'galleries',
            ],
            compact('gallery'),
        );
    }

    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('gallery-images');
        }

        // Update data lainnya
        $gallery->update($data);

        return redirect('/dashboard/galleries')->with('success', 'Image in the gallery has been updated!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }
        // Hapus galeri dari database
        $gallery->delete();

        return redirect('/dashboard/galleries')->with('success', 'Image has been removed from the gallery.');
    }
}
