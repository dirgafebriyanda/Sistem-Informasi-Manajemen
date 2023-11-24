<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galeri', [
            'title' => 'Bengkel Sport Kreatif - Galeri',
            'active' => 'galeri',
            'galleries' => Gallery::all()
        ]);
    }

     public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('dashboard.galleries.show', compact('gallery'));
    }

    public function download($id)
    {
        $gallery = Gallery::find($id);

        // Validasi atau otorisasi unduhan jika diperlukan

        $filePath = public_path('images/' . $gallery->image);

        return response()->download($filePath, $gallery->image);
    }
}
