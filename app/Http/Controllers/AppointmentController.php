<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    public function create(): View
    {
        return view('appointments.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'pet_name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);

        Appointment::create([
            'user_id' => auth()->id(),
            'pet_name' => $validated['pet_name'],
            'service' => $validated['service'],
            'appointment_date' => $validated['appointment_date'],
        ]);

        return redirect()->route('appointments.index');
    }

    public function edit(Appointment $appointment): View
    {
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment): RedirectResponse
    {
        $validated = $request->validate([
            'pet_name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);

        $appointment->update($validated);

        return redirect()->route('appointments.index');
    }

    public function destroy(Appointment $appointment): RedirectResponse
    {
        $appointment->delete();

        return redirect()->route('appointments.index');
    }
}
