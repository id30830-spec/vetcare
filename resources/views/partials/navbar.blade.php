<nav class="bg-sky-700 text-white px-6 py-4 sticky top-0 z-50 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="text-2xl font-bold hover:opacity-90">
            VetCare 🐾
        </a>

        {{-- Links --}}
        <div class="flex items-center gap-6">

            <a href="{{ route('home') }}" class="hover:underline">Home</a>

            <a href="{{ route('services.index') }}" class="hover:underline">Services</a>

            {{-- Book Now --}}
            <a href="{{ route('appointments.create') }}"
               class="bg-indigo-600 px-4 py-2 rounded-lg font-semibold
                      shadow hover:bg-indigo-700 hover:shadow-lg transition">
                Book Now
            </a>

            {{-- Guest --}}
            @guest
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
                <a href="{{ route('register') }}"
                   class="bg-white text-sky-700 px-4 py-2 rounded shadow hover:bg-gray-100">
                    Register
                </a>
            @endguest

            {{-- Auth (NO NAME HERE) --}}
            @auth
                <a href="{{ route('appointments.index') }}" class="hover:underline">
                    My Appointments
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-500 px-4 py-2 rounded shadow hover:bg-red-600">
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</nav>
