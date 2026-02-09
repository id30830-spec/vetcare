<x-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">

        <h2 class="text-4xl text-center font-bold mb-4 text-indigo-900">
            Create Veterinary Service
        </h2>

        {{-- FORM START --}}
        <form
            method="POST"
            action="{{ route('services.store') }}"
            enctype="multipart/form-data"
        >
            @csrf

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Service Information
            </h2>

            {{-- Service Name --}}
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Service Name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-500 @enderror"
                    placeholder="Vaccination, Check-up, Surgery"
                >
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Service Image --}}
            <div class="mb-4">
                <label class="block text-gray-700" for="service_image">
                    Service Image
                </label>
                <input
                    id="service_image"
                    type="file"
                    name="service_image"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('service_image') border-red-500 @enderror"
                >
                @error('service_image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mb-4">
                <label class="block text-gray-700" for="description">Short Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('description') border-red-500 @enderror"
                    placeholder="Brief description of the service"
                >{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

           

            {{-- Duration --}}
            <div class="mb-4">
                <label class="block text-gray-700" for="duration">Duration (minutes)</label>
                <input
                    id="duration"
                    type="number"
                    name="duration"
                    value="{{ old('duration') }}"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('duration') border-red-500 @enderror"
                    placeholder="30"
                >
                @error('duration')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Price --}}
            <div class="mb-6">
                <label class="block text-gray-700" for="price">Price ($)</label>
                <input
                    id="price"
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price') }}"
                    class="w-full px-4 py-2 border rounded focus:outline-none @error('price') border-red-500 @enderror"
                    placeholder="49.99"
                >
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- SUBMIT --}}
            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded focus:outline-none"
            >
                Save Service
            </button>

        </form>
        {{-- FORM END --}}

    </div>
</x-layout>
