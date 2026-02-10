@extends('layout')

@section('title', 'VetCare | Home')

@section('content')
    {{-- HERO SECTION --}}
    <section
        class="relative h-[70vh] flex items-center justify-center text-center"
        style="background-image: url('{{ asset('images/hero-vet.jpg') }}');
               background-size: cover;
               background-position: center;"
    >
        {{-- Overlay --}}
        <div class="absolute inset-0 bg-indigo-900/60"></div>

        {{-- Content --}}
        <div class="relative z-10 max-w-3xl px-6 text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Welcome to VetCare
            </h1>

            <p class="text-lg md:text-xl mb-6">
                Professional veterinary care for your pets —
                because they are family 🐾
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ route('services.index') }}"
                    class="bg-white text-indigo-700 px-6 py-3 rounded-lg font-semibold
                           hover:bg-gray-100 transition"
                >
                    View Services
                </a>
@if (Route::has('appointments.create'))
    <a
        href="{{ route('appointments.create') }}"
        class="bg-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition"
    >
        Book Appointment
    </a>
@endif

            </div>
        </div>
    </section>

    {{-- INFO SECTION --}}
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

            <div class="bg-white rounded-xl p-6 shadow">
                <h3 class="text-xl font-bold text-indigo-800 mb-2">
                    Experienced Vets
                </h3>
                <p class="text-gray-600">
                    Our licensed veterinarians provide expert medical care
                    with compassion.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow">
                <h3 class="text-xl font-bold text-indigo-800 mb-2">
                    Modern Equipment
                </h3>
                <p class="text-gray-600">
                    We use modern diagnostic and treatment technology.
                </p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow">
                <h3 class="text-xl font-bold text-indigo-800 mb-2">
                    Trusted Care
                </h3>
                <p class="text-gray-600">
                    Hundreds of happy pet owners trust VetCare every year.
                </p>
            </div>

        </div>
    </section>
@endsection
