<x-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">

        <h2 class="text-4xl text-center font-bold mb-4 text-indigo-900">
            Edit Service
        </h2>

        <form
            method="POST"
            action="{{ route('services.update', $service->id) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
                <label class="block text-gray-700">Service Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $service->name) }}"
                    class="w-full px-4 py-2 border rounded"
                >
            </div>

            {{-- Description --}}
            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea
                    name="description"
                    class="w-full px-4 py-2 border rounded"
                >{{ old('description', $service->description) }}</textarea>
            </div>

            {{-- Details --}}
            <div class="mb-4">
                <label class="block text-gray-700">Details</label>
                <textarea
                    name="details"
                    class="w-full px-4 py-2 border rounded"
                >{{ old('details', $service->details) }}</textarea>
            </div>

            {{-- Category --}}
            <div class="mb-4">
                <label class="block text-gray-700">Category</label>
                <input
                    type="text"
                    name="category"
                    value="{{ old('category', $service->category) }}"
                    class="w-full px-4 py-2 border rounded"
                >
            </div>

            {{-- Duration --}}
            <div class="mb-4">
                <label class="block text-gray-700">Duration (minutes)</label>
                <input
                    type="number"
                    name="duration"
                    value="{{ old('duration', $service->duration) }}"
                    class="w-full px-4 py-2 border rounded"
                >
            </div>

            {{-- Price --}}
            <div class="mb-4">
                <label class="block text-gray-700">Price</label>
                <input
                    type="number"
                    step="0.01"
                    name="price"
                    value="{{ old('price', $service->price) }}"
                    class="w-full px-4 py-2 border rounded"
                >
            </div>

            {{-- Image --}}
            <div class="mb-6">
                <label class="block text-gray-700">Service Image</label>

                @if($service->service_image)
                    <img
                        src="{{ asset('storage/' . $service->service_image) }}"
                        class="w-full h-40 object-cover rounded mb-2"
                    >
                @endif

                <input type="file" name="service_image">
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded"
            >
                Update Service
            </button>
        </form>

    </div>
</x-layout>
