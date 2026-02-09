@props(['service'])

<div
    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300"
>
    {{-- Service name --}}
    <h3 class="text-lg font-semibold text-slate-800 mb-1">
        {{ $service->name }}
    </h3>

    {{-- Category (optional) --}}
    @if($service->category)
        <p class="text-sm text-slate-500 mb-2">
            {{ $service->category }}
        </p>
    @endif

    {{-- Short description (optional) --}}
    @if($service->description)
        <p class="text-slate-600 text-sm mb-3">
            {{ $service->description }}
        </p>
    @endif

    {{-- Meta info --}}
    <ul class="text-sm text-slate-700 space-y-1">
        @if($service->duration)
            <li>
                <strong>Duration:</strong> {{ $service->duration }} min
            </li>
        @endif

        @if(!is_null($service->price))
            <li>
                <strong>Price:</strong> ${{ number_format($service->price, 2) }}
            </li>
        @endif
    </ul>

    {{-- View details --}}
    <div class="mt-4">
        <a
            href="{{ route('services.show', $service) }}"
            class="inline-block text-indigo-600 font-semibold hover:underline"
        >
            View details →
        </a>
    </div>
</div>
