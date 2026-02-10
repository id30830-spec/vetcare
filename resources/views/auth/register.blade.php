@extends('layout')

@section('title', 'Register')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input class="w-full border p-2 mb-4" type="text" name="name" placeholder="Name" required>
        <input class="w-full border p-2 mb-4" type="email" name="email" placeholder="Email" required>
        <input class="w-full border p-2 mb-4" type="password" name="password" placeholder="Password" required>
        <input class="w-full border p-2 mb-4" type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button class="w-full bg-sky-700 text-white py-2 rounded">
            Register
        </button>
    </form>
</div>
@endsection
