<nav class="bg-sky-700 text-white px-6 py-4">
    <div class="container mx-auto flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-2xl font-bold">
            VetCare 🐾
        </a>

        {{-- Links --}}
        <div class="flex items-center gap-6">

            <a href="{{ url('/') }}" class="hover:underline">
                Home
            </a>

            <a href="{{ url('/services') }}" class="hover:underline">
                Services
            </a>

            {{-- Guest (not logged in) --}}
            @guest
                <a href="{{ route('login') }}" class="hover:underline">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="bg-white text-sky-700 px-4 py-2 rounded hover:bg-gray-100">
                    Register
                </a>
            @endguest

            {{-- Authenticated --}}
            @auth
                <span class="text-sm">
                    Hi, {{ auth()->user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-red-500 px-4 py-2 rounded hover:bg-red-600">
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</nav>
