<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function __construct()
    {
        // All users can view services
        $this->middleware('auth')->except(['index', 'show']);

        // Only admin can manage services
        $this->middleware(function ($request, $next) {
            if (!auth()->user()->is_admin) {
                abort(403, 'Unauthorized');
            }
            return $next($request);
        })->except(['index', 'show']);
    }

    /**
     * Display all services
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    /**
     * Show single service
     */
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    /**
     * Show create form (ADMIN)
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store new service (ADMIN)
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'details' => 'nullable|string',
            'category' => 'nullable|string',
            'duration' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'service_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('service_image')) {
            $validatedData['service_image'] =
                $request->file('service_image')->store('services', 'public');
        }

        Service::create($validatedData);

        return redirect()
            ->route('services.index')
            ->with('success', 'Service created successfully 🐾');
    }

    /**
     * Show edit form (ADMIN)
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update service (ADMIN)
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'details' => 'nullable|string',
            'category' => 'nullable|string',
            'duration' => 'nullable|integer',
            'price' => 'nullable|numeric',
            'service_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('service_image')) {
            if ($service->service_image) {
                Storage::disk('public')->delete($service->service_image);
            }

            $validatedData['service_image'] =
                $request->file('service_image')->store('services', 'public');
        }

        $service->update($validatedData);

        return redirect()
            ->route('services.show', $service)
            ->with('success', 'Service updated successfully 🐾');
    }

    /**
     * Delete service (ADMIN)
     */
    public function destroy(Service $service)
    {
        if ($service->service_image) {
            Storage::disk('public')->delete($service->service_image);
        }

        $service->delete();

        return redirect()
            ->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
