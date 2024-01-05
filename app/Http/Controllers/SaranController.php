<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarans = Saran::paginate(10);

        return view('dashboard.saran.index', ['sarans' => $sarans, 'title' => 'Saran']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kritikdansaran', [
            'active' => 'kritik',
            'title' => ' Bengkel Sport Kreatif - Kritik dan Saran',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'komentar' => 'required|string',
        ]);

        // Create a new Saran entry in the database
        Saran::create($validatedData);

        return redirect()
            ->route('saran')
            ->with('success', "Terima kasih, $validatedData[nama]! Saran Anda telah berhasil disampaikan.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // Temukan data Saran berdasarkan ID
        $saran = Saran::find($id);

        // Periksa apakah data Saran ditemukan
        if ($saran) {
            // Simpan nama sebelum menghapus
            $nama = $saran->nama;

            // Hapus data Saran
            $saran->delete();

            // Redirect dengan pesan sukses termasuk nama
            return redirect()
                ->route('saran.index')
                ->with('success', "Saran milik $nama berhasil dihapus.");
        } else {
            // Redirect dengan pesan error jika data tidak ditemukan
            return redirect()
                ->route('saran.index')
                ->with('error', 'Saran tidak ditemukan.');
        }
    }
}
