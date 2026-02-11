<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // PUBLIC - List services
    public function index()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    // PUBLIC - Show single service
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // ADMIN - Show create form
    public function create()
    {
        return view('services.create');
    }

    // ADMIN - Store new service
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'details' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'service_image' => 'nullable|string', // change if using file upload
        ]);


        Service::create($request->only('name', 'price', 'description'));

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    // ADMIN - Show edit form
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // ADMIN - Update service
    public function update(Request $request, Service $service)
    {
        Service::create($request->only([
            'name',
            'description',
            'details',
            'category',
            'duration',
            'price',
            'service_image',
        ]));


        $service->update($request->only('name', 'price', 'description'));

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }

    // ADMIN - Delete service
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
