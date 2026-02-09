<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        {{-- MAIN CONTENT --}}
        <section class="md:col-span-3">

            {{-- SERVICE CARD --}}
            <div class="rounded-lg shadow-md bg-white p-6">

                {{-- Back + Admin actions --}}
                <div class="flex justify-between items-center mb-4">
                    <a href="{{ route('services.index') }}" class="text-indigo-700">
                        ← Back to Services
                    </a>

                    @auth
                        @if(auth()->user()->is_admin)
                            <div class="flex gap-2">
                                <a
                                    href="{{ route('services.edit', $service) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded text-sm"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('services.destroy', $service) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this service?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>

                {{-- Title --}}
                <h2 class="text-2xl font-semibold text-indigo-900">
                    {{ $service->name }}
                </h2>

                {{-- Image --}}
                @if($service->service_image)
                    <img
                        src="{{ asset('storage/' . $service->service_image) }}"
                        alt="{{ $service->name }}"
                        class="w-full h-64 object-cover rounded-lg my-4"
                    >
                @endif

                {{-- Description --}}
                @if($service->description)
                    <p class="text-gray-700 text-lg mt-2">
                        {{ $service->description }}
                    </p>
                @endif

                {{-- Meta info --}}
                <ul class="my-4 bg-gray-100 p-4 rounded space-y-1">
                    @if($service->duration)
                        <li>
                            <strong>Duration:</strong> {{ $service->duration }} minutes
                        </li>
                    @endif

                    @if(!is_null($service->price))
                        <li>
                            <strong>Price:</strong> ${{ number_format($service->price, 2) }}
                        </li>
                    @endif

                    @if($service->category)
                        <li>
                            <strong>Category:</strong> {{ $service->category }}
                        </li>
                    @endif
                </ul>
            </div>

            {{-- DETAILS --}}
            @if($service->details)
                <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-indigo-900 mb-2">
                        Service Details
                    </h3>

                    <p class="text-gray-700">
                        {{ $service->details }}
                    </p>
                </div>
            @endif

            {{-- BOOKING --}}
            <a
                href="{{ route('appointments.create', $service) }}"
                class="mt-6 block w-full text-center px-5 py-3 rounded
                       bg-indigo-600 text-white hover:bg-indigo-700"
            >
                Book Appointment
            </a>

        </section>

        {{-- SIDEBAR --}}
        <aside class="bg-white rounded-lg shadow-md p-4">
            <h3 class="text-xl text-center font-bold mb-4">
                Vet Clinic Info
            </h3>

            <img
                src="/images/Vet_logo.jpg"
                alt="Vet Clinic Logo"
                class="w-full rounded mb-4"
            >

            <h4 class="text-lg font-bold">
                Happy Paws Veterinary Clinic
            </h4>

            <p class="text-gray-700 my-3">
                Professional veterinary care with love and compassion.
            </p>

            <a href="/contact" class="text-indigo-500 hover:underline">
                Contact Us
            </a>
        </aside>

    </div>
</x-layout>
