@extends('layout')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input class="w-full border p-2 mb-4" type="email" name="email" placeholder="Email" required>
        <input class="w-full border p-2 mb-4" type="password" name="password" placeholder="Password" required>

        <button class="w-full bg-sky-700 text-white py-2 rounded">
            Login
        </button>
    </form>
</div>
@endsection
