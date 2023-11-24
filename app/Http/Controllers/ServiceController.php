<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('dashboard.services.index', [
            'title' => 'Bengkel Sport Kreatif - Layanan',
            'active' => 'layanan',
            'services' => Service::all() // Ubah dari 'service' menjadi 'Service'
        ]);
    }

    public function create()
    {
        return view('dashboard.services.create', [
            'title' => 'Create new service', // Ubah judul dari 'Create new post' menjadi 'Create new service'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service' => 'required|max:255',
            'biaya' => 'required|numeric',
        ]);

        $newService = Service::create($data); // Ubah dari 'service' menjadi 'Service'

        return redirect('/dashboard/services')->with('success', 'New service "' . $newService->service . '" has been added!');
    }

    public function show(Service $service)
    {
        // Kode untuk menampilkan service tertentu
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', [
            'title' => 'Edit service',
            'service' => $service,
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'service' => 'required|max:255',
            'biaya' => 'required|numeric',
        ]);

        $service->update($data);

        return redirect('/dashboard/services')->with('success', 'Service "' . $service->service . '" has been updated!');
    }

    public function destroy(Service $service)
    {
        $deletedService = $service->service;

        $service->delete();

        return redirect('/dashboard/services')->with('success', 'Service "' . $deletedService . '" has been deleted.');
    }
}
