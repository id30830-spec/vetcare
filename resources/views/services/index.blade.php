<x-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($services as $service)
            <div
                class="bg-sky-100 rounded-2xl p-6 shadow-sm border border-slate-100
                       hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">

                {{-- Service image --}}
                @if($service->service_image)
                    <img
                        src="{{ asset('storage/' . $service->service_image) }}"
                        alt="{{ $service->name }}"
                        class="w-full h-40 object-cover rounded-lg mb-4"
                    >
                @endif

                {{-- Service name --}}
                <h3 class="text-lg font-semibold text-slate-800 mb-1">
                    {{ $service->name }}
                </h3>

                {{-- Category --}}
                @if($service->category)
                    <p class="text-xs uppercase tracking-wide text-indigo-500 mb-2">
                        {{ $service->category }}
                    </p>
                @endif

                {{-- Description --}}
                @if($service->description)
                    <p class="text-slate-600 text-sm mb-4">
                        {{ $service->description }}
                    </p>
                @endif

                {{-- Meta --}}
                <ul class="text-sm text-slate-700 space-y-1 mb-5">
                    @if($service->duration)
                        <li>⏱ <strong>Duration:</strong> {{ $service->duration }} min</li>
                    @endif

                    @if(!is_null($service->price))
                        <li>💲 <strong>Price:</strong> ${{ number_format($service->price, 2) }}</li>
                    @endif
                </ul>

                {{-- View details --}}
                <a
                    href="{{ route('services.show', $service) }}"
                    class="mt-auto mb-3 inline-block text-center bg-indigo-600 text-white
                           px-4 py-2 rounded-lg hover:bg-indigo-700 transition"
                >
                    View Details
                </a>

                {{-- ADMIN ACTIONS --}}
                @auth
                    @if(auth()->user()->is_admin)
                        <div class="flex gap-3">
                            <a
                                href="{{ route('services.edit', $service) }}"
                                class="flex-1 text-center px-4 py-2 text-sm rounded-lg
                                       bg-yellow-500 text-white hover:bg-yellow-600 transition"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('services.destroy', $service) }}"
                                method="POST"
                                class="flex-1"
                                onsubmit="return confirm('Are you sure you want to delete this service?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="w-full px-4 py-2 text-sm rounded-lg
                                           bg-red-500 text-white hover:bg-red-600 transition"
                                >
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth

            </div>
        @empty
            <p class="col-span-full text-center text-slate-500">
                No services available.
            </p>
        @endforelse

    </div>
</x-layout>
