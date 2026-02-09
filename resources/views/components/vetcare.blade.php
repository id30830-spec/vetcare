@props([
    'title' => 'Professional Veterinary Care',
    'subtitle' => 'Because your pet deserves the best'
])

<section class="vetcare relative h-[420px] flex items-center">
    <div class="overlay"></div>

    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-white">
            {{ $title }}
        </h1>

        <p class="mt-4 text-lg text-gray-200">
            {{ $subtitle }}
        </p>
    </div>
</section>
