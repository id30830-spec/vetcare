<header class="bg-sky-700 text-white sticky top-0 z-50 shadow-md">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <h1 class="text-2xl font-bold tracking-wide">
            <a href="{{ route('home') }}" class="hover:opacity-90">
                VetCare 🐾
            </a>
        </h1>

        {{-- Desktop Navigation --}}
        <nav class="hidden md:flex items-center space-x-6">

            {{-- Public links --}}
            <x-nav-link url="{{ route('home') }}" :active="request()->routeIs('home')">
                Home
            </x-nav-link>

            <x-nav-link url="{{ route('services.index') }}" :active="request()->routeIs('services.*')">
                Services
            </x-nav-link>

            {{-- Auth links --}}
            @guest
                <x-nav-link url="{{ route('login') }}">
                    Login
                </x-nav-link>

                <x-nav-link url="{{ route('register') }}">
                    Register
                </x-nav-link>
            @endguest

            @auth@auth
    <a href="{{ route('dashboard') }}" class="text-white hover:underline">
        Dashboard
    </a>

    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="text-white hover:underline">
            Logout
        </button>
    </form>
@else
    <a href="{{ route('login') }}" class="text-white hover:underline">
        Login
    </a>

    <a href="{{ route('register') }}" class="text-white hover:underline">
        Register
    </a>
@endauth

        </nav>

        {{-- Mobile Hamburger --}}
        <button id="hamburger" class="md:hidden focus:outline-none">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <nav
        id="mobile-menu"
        class="hidden bg-sky-800 text-white py-3 space-y-1 md:hidden"
    >
        <x-nav-link url="{{ route('home') }}" :mobile="true">
            Home
        </x-nav-link>

        <x-nav-link url="{{ route('services.index') }}" :mobile="true">
            Services
        </x-nav-link>

        @guest
            <x-nav-link url="{{ route('login') }}" :mobile="true">
                Login
            </x-nav-link>

            <x-nav-link url="{{ route('register') }}" :mobile="true">
                Register
            </x-nav-link>
        @endguest

        @auth
            <x-nav-link url="{{ route('dashboard') }}" :mobile="true">
                Dashboard
            </x-nav-link>

            <form method="POST" action="{{ route('logout') }}" class="px-4">
                @csrf
                <button class="w-full text-left py-2 hover:bg-sky-700 rounded">
                    Logout
                </button>
            </form>
        @endauth
    </nav>
</header>
