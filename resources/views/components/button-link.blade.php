@props([
    'url' => '/',
    'icon' => null,
    'bgClass' => 'bg-blue-600',
    'hoverClass' => 'hover:bg-blue-700',
    'textClass' => 'text-white',
    'block' => false,
])

<a
    href="{{ $url }}"
    class="
        {{ $bgClass }} {{ $hoverClass }} {{ $textClass }}
        px-4 py-2 rounded-lg font-medium
        transition-all duration-200
        hover:shadow-md
        {{ $block ? 'block mx-4 text-center' : '' }}
    "
>
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
