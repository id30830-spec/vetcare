@props(['type', 'message'])

<div
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 5000)"
    x-show="show"
    x-transition.opacity.duration.500ms
    class="p-4 mb-4 text-sm text-white rounded
        {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }}"
>
    {{ $message }}
</div>
