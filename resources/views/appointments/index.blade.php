<x-layout>

    <section class="bg-gradient-to-b from-sky-100 to-white py-16">
        <div class="max-w-4xl mx-auto px-6">

            {{-- Page Title --}}
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-indigo-900">
                    VetCare Appointments 🐾
                </h1>
                <p class="mt-3 text-slate-600">
                    View and manage your pet’s upcoming visits
                </p>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-3 rounded-lg mb-6 text-center shadow">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Appointments List --}}
            @forelse ($appointments as $appointment)
                <div class="bg-white rounded-xl shadow-md p-6 mb-5 flex flex-col md:flex-row md:items-center md:justify-between">

                    {{-- Left Info --}}
                    <div>
                        <h2 class="text-xl font-semibold text-indigo-900">
                            {{ $appointment->pet_name }}
                        </h2>
                        <p class="text-slate-600 mt-1">
                            Service: {{ $appointment->service }}
                        </p>
                    </div>

                    {{-- Right Side --}}
                    <div class="mt-4 md:mt-0 text-right">
                        <div class="text-sky-700 font-semibold mb-3">
                            📅 {{ \Carbon\Carbon::parse($appointment->appointment_date)->format('F j, Y') }}
                        </div>

                        {{-- Actions --}}
                        <div class="flex gap-4 justify-end">
                            {{-- Edit --}}
                            <a href="/appointments/{{ $appointment->id }}/edit"
                               class="text-indigo-700 hover:underline">
                                Edit
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('appointments.destroy', $appointment->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to cancel this appointment?')">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-red-600 hover:text-red-800 underline font-medium">
                                    Cancel
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @empty
                {{-- Empty State --}}
                <div class="bg-white rounded-xl shadow p-10 text-center">
                    <p class="text-slate-600 mb-4">
                        No appointments booked yet.
                    </p>
                    <a href="/appointments/create"
                       class="inline-block bg-indigo-900 hover:bg-sky-700
                              text-white px-6 py-3 rounded-lg transition">
                        Book Your First Appointment
                    </a>
                </div>
            @endforelse

        </div>
    </section>

</x-layout>
