@extends('layout')

@section('title', 'VetCare | Home')

@section('content')

{{-- HERO / HEADER --}}
<section class="relative bg-cover bg-center h-[70vh] rounded-xl overflow-hidden shadow-lg"
         style="background-image: url('/images/vetcare.jpg');">

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/50"></div>

    {{-- Content --}}
    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white px-6">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">
            Caring for Your Pets 🐾
        </h1>

        <p class="text-lg md:text-xl max-w-2xl mb-6">
            Professional veterinary care with love, compassion, and experience.
        </p>

        <div class="flex gap-4">
            <a href="{{ route('services.index') }}"
               class="bg-white text-sky-700 px-6 py-3 rounded-lg font-semibold
                      shadow-lg hover:shadow-xl hover:scale-105 transition">
                View Services
            </a>

            @if(Route::has('appointments.create'))
                <a href="{{ route('appointments.create') }}"
                   class="bg-indigo-600 px-6 py-3 rounded-lg font-semibold
                          shadow-lg hover:bg-indigo-700 hover:shadow-xl hover:scale-105 transition">
                    Book Now
                </a>
            @endif
        </div>
    </div>
</section>

{{-- INFO SECTION --}}
<section class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-8">

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-2">🐶 Experienced Vets</h3>
        <p>Our team provides expert medical care for pets of all kinds.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-2">💉 Modern Equipment</h3>
        <p>We use up-to-date diagnostic and treatment technology.</p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-2">❤️ Compassion First</h3>
        <p>Your pets are treated like family, always.</p>
    </div>

</section>

{{-- BOTTOM BANNER --}}
<section class="bg-indigo-600 text-white py-12 text-center">
    <h2 class="text-3xl font-bold mb-4">
        Ready to book a visit?
    </h2>

    @if(Route::has('appointments.create'))
        <a href="{{ route('appointments.create') }}"
           class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-lg
                  font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition">
            Book Appointment
        </a>
    @endif
</section>

@endsection
