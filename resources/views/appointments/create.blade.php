<x-layout>
    <section class="bg-gradient-to-b from-sky-200 to-white py-20">
        <div class="max-w-lg mx-auto px-6">

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-lg p-8">

                {{-- Title --}}
                <h1 class="text-3xl font-bold text-indigo-900 text-center">
                    Book an Appointment
                </h1>

                <p class="mt-3 text-slate-600 text-center">
                    Schedule a visit for your pet in just a few steps 🐾
                </p>

                {{-- Form --}}
                <form method="POST" action="{{ route('appointments.store') }}" class="mt-8 space-y-5">
                    @csrf

                    {{-- Pet Name --}}
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">
                            Pet Name
                        </label>
                        <input
                            type="text"
                            name="pet_name"
                            placeholder="e.g. Bella"
                            value="{{ old('pet_name') }}"
                            required
                            class="w-full rounded-lg border border-slate-300 px-4 py-2
                                   focus:outline-none focus:ring-2 focus:ring-sky-400"
                        >

                        @error('pet_name')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Service --}}
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">
                            Service
                        </label>
                        <input
                            type="text"
                            name="service"
                            placeholder="e.g. Vaccination"
                            value="{{ old('service') }}"
                            required
                            class="w-full rounded-lg border border-slate-300 px-4 py-2
                                   focus:outline-none focus:ring-2 focus:ring-sky-400"
                        >

                        @error('service')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Reason (NEW – matches migration) --}}
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">
                            Reason (optional)
                        </label>
                        <textarea
                            name="reason"
                            rows="3"
                            placeholder="Any additional details..."
                            class="w-full rounded-lg border border-slate-300 px-4 py-2
                                   focus:outline-none focus:ring-2 focus:ring-sky-400"
                        >{{ old('reason') }}</textarea>

                        @error('reason')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Appointment Date --}}
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">
                            Appointment Date
                        </label>
                        <input
                            type="date"
                            name="appointment_date"
                            value="{{ old('appointment_date') }}"
                            required
                            class="w-full rounded-lg border border-slate-300 px-4 py-2
                                   focus:outline-none focus:ring-2 focus:ring-sky-400"
                        >

                        @error('appointment_date')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="w-full mt-4 bg-indigo-900 hover:bg-sky-700
                               text-white font-semibold py-3 rounded-lg
                               transition shadow-md hover:shadow-lg"
                    >
                        Book Appointment
                    </button>
                </form>

            </div>

        </div>
    </section>
</x-layout>
