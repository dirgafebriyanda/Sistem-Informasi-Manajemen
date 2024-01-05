<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $users = User::paginate(10);
        return view('dashboard.user.index', [
            'title' => 'Users',
            'active' => 'users',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('dashboard.user.create', [
            'title' => 'Create User',
            'active' => 'user',
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
        $this->authorize('admin');
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'email_verified_at' => now(), // Anda mungkin ingin menyesuaikannya dengan cara yang sesuai
            'password' => Hash::make($request->password),
        ]);

        // Redirect dengan notifikasi
        return redirect('dashboard/users')->with('success', "User {$user->name} created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.user.show', [
            'title' => 'Show',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view(
            'dashboard.user.edit',
            [
                'title' => 'Edit User',
                'active' => 'user',
            ],
            compact('user'),
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => "required|email|max:255|unique:users,email,{$user->id}",
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jekel' => 'required|in:laki-laki,perempuan'
        ];

        $validatedData = $request->validate($rules);

        // Menghapus gambar lama jika ada gambar baru yang diunggah
        if ($request->file('image')) {
            if ($user->image) {
                Storage::delete($user->image);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        // Mengupdate password jika ada perubahan
        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        }

        if (auth()->user()->id === $user->id) {
            // Arahkan ke halaman utama dan tampilkan notifikasi berhasil
            $user->update($validatedData);
            return redirect('/dashboard/users/' . $user->id)->with('success', 'Akun Anda berhasil diupdate!');
        } else {
            // Arahkan ke indeks pengguna dan tampilkan notifikasi berhasil
            $user->update($validatedData);
            return redirect('/dashboard/users')->with('success', "Pengguna $user->name berhasil diupdate!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Periksa apakah pengguna yang terautentikasi menghapus akun mereka sendiri
        if (auth()->user()->id === $user->id) {
            // Arahkan ke halaman utama dan tampilkan notifikasi berhasil
            $user->delete();
            auth()->logout(); // Opsional, Anda dapat logout pengguna
            return redirect('/login')->with('success', 'Akun Anda berhasil dihapus!');
        } else {
            $this->authorize('admin');
            // Arahkan ke indeks pengguna dan tampilkan notifikasi berhasil
            $user->delete();
            return redirect('/dashboard/users')->with('success', "Pengguna $user->name berhasil dihapus!");
        }
    }
}
