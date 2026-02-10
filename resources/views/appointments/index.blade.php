@extends('layout')

@section('title', 'My Appointments')

@section('content')
<h2 class="text-2xl font-bold mb-6">My Appointments</h2>

<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Pet</th>
            <th class="p-3 text-left">Service</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
            <tr class="border-t">
                <td class="p-3">{{ $appointment->pet_name }}</td>
                <td class="p-3">{{ $appointment->service }}</td>
                <td class="p-3">{{ $appointment->appointment_date }}</td>
                <td class="p-3">
                    <form method="POST"
                          action="{{ route('appointments.destroy', $appointment) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
