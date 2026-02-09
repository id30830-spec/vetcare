<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VetCare Clinic</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <x-header />

    @if(request()->is('/'))
        <x-vetcare
            title="Professional Veterinary Care You Can Trust"
            subtitle="Because your pets deserve the best 🐾"
        />
        <x-top-banner />
    @endif

    <main class="container mx-auto p-6">
        {{-- VetCare Alerts --}}
@if (session('success'))
    <x-alert type="success" message="{{ session('success') }}" />
@endif

@if (session('error'))
    <x-alert type="error" message="{{ session('error') }}" />
@endif

        {{ $slot }}
    </main>

    @if(request()->is('/'))
        <x-bottom-banner />
    @endif

    <!-- ✅ FIXED -->
    <script src="{{ asset('js/script.js') }}"></script>
   


</body>
</html>
