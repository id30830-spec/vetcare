<x-layout>

<section class="bg-gradient-to-b from-sky-200 to-white py-20">
    <div class="max-w-lg mx-auto px-6">

        <div class="bg-white rounded-2xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-indigo-900 text-center">
                Edit Appointment
            </h1>

            <form method="POST" action="/appointments/{{ $appointment->id }}" class="mt-8 space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">
                        Pet Name
                    </label>
                    <input
                        type="text"
                        name="pet_name"
                        value="{{ $appointment->pet_name }}"
                        class="w-full rounded-lg border px-4 py-2"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">
                        Service
                    </label>
                    <input
                        type="text"
                        name="service"
                        value="{{ $appointment->service }}"
                        class="w-full rounded-lg border px-4 py-2"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-1">
                        Appointment Date
                    </label>
                    <input
                        type="date"
                        name="appointment_date"
                        value="{{ $appointment->appointment_date }}"
                        class="w-full rounded-lg border px-4 py-2"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full mt-4 bg-indigo-900 hover:bg-sky-700
                           text-white font-semibold py-3 rounded-lg">
                    Update Appointment
                </button>
            </form>

        </div>
    </div>
</section>

</x-layout>
