@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto mt-12">
    <div class="bg-white p-8 rounded-xl shadow">
        <h1 class="text-2xl font-semibold text-gray-800 mb-2">
            Welcome back, {{ auth()->user()->name }}👋
        </h1>

        <p class="text-gray-600">
            You’re logged in successfully.
            Use the navigation bar to manage your appointments.
        </p>
    </div>
</div>
@endsection
