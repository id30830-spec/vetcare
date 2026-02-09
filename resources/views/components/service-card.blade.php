@props(['service'])

<div class="flex items-center gap-5 bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition">
    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-sky-100 flex items-center justify-center">
        <i class="{{ $service->icon }} text-indigo-900 text-xl"></i>
    </div>

    <div>
        <h3 class="text-lg font-semibold text-slate-800">
            {{ $service->name }}
        </h3>
        <p class="text-slate-600 text-sm mt-1">
            {{ $service->description }}
        </p>
    </div>
</div>
