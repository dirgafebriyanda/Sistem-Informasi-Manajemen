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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
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

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery::findOrFail($id);

        // Jika ada gambar baru yang diunggah, hapus gambar lama
        if ($request->hasFile('image')) {
            // Pastikan gambar lama ada sebelum dihapus
            if ($gallery->image) {
                $imagePath = public_path('images') . '/' . $gallery->image;

                // Hapus gambar lama dari penyimpanan
                if (file_exists($imagePath)) {
                    @unlink($imagePath);
                }
            }

            // Simpan gambar baru ke penyimpanan
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // Update nama gambar baru pada model galeri
            $data['image'] = $imageName;
        }

        // Update data lainnya
        $gallery->update($data);

        return redirect('/dashboard/galleries')->with('success', 'Image in the gallery has been updated!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Pastikan gambar ada sebelum dihapus
        if ($gallery->image) {
            $imagePath = public_path('images') . '/' . $gallery->image;

            // Hapus gambar dari penyimpanan
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }

            // Hapus nama gambar dari model galeri
            $gallery->update(['image' => null]);
        }

        // Hapus galeri dari database
        $gallery->delete();

        return redirect('/dashboard/galleries')->with('success', 'Image has been removed from the gallery.');
    }
}
