@extends('layout')

@section('title', 'Book Appointment')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-indigo-900">
        Book Appointment
    </h2>

    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Pet Name</label>
            <input type="text" name="pet_name" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Service</label>
            <input type="text" name="service" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Appointment Date</label>
            <input type="date" name="appointment_date" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
            Save Appointment
        </button>
    </form>
</div>
@endsection
