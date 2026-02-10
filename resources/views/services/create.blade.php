@extends('layout')

@section('title', 'Create Veterinary Service')

@section('content')
<div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">

    <h2 class="text-4xl text-center font-bold mb-4 text-indigo-900">
        Create Veterinary Service
    </h2>

    <form
        method="POST"
        action="{{ route('services.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        <h3 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Service Information
        </h3>

        {{-- Service Name --}}
        <div class="mb-4">
            <label class="block text-gray-700">Service Name</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="w-full px-4 py-2 border rounded @error('name') border-red-500 @enderror"
                placeholder="Vaccination, Check-up, Surgery"
            >
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Service Image --}}
        <div class="mb-4">
            <label class="block text-gray-700">Service Image</label>
            <input
                type="file"
                name="service_image"
                class="w-full px-4 py-2 border rounded @error('service_image') border-red-500 @enderror"
            >
            @error('service_image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div class="mb-4">
            <label class="block text-gray-700">Short Description</label>
            <textarea
                name="description"
                rows="4"
                class="w-full px-4 py-2 border rounded @error('description') border-red-500 @enderror"
            >{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Duration --}}
        <div class="mb-4">
            <label class="block text-gray-700">Duration (minutes)</label>
            <input
                type="number"
                name="duration"
                value="{{ old('duration') }}"
                class="w-full px-4 py-2 border rounded @error('duration') border-red-500 @enderror"
                placeholder="30"
            >
        </div>

        {{-- Price --}}
        <div class="mb-6">
            <label class="block text-gray-700">Price ($)</label>
            <input
                type="number"
                step="0.01"
                name="price"
                value="{{ old('price') }}"
                class="w-full px-4 py-2 border rounded @error('price') border-red-500 @enderror"
                placeholder="49.99"
            >
        </div>

        <button
            type="submit"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded"
        >
            Save Service
        </button>
    </form>
</div>
@endsection
