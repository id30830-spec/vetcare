<header class="bg-sky-700 text-white sticky top-0 z-50 shadow-md">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <h1 class="text-2xl font-bold tracking-wide">
            <a href="{{ url('/') }}" class="hover:opacity-90">
                VetCare 🐾
            </a>
        </h1>

        {{-- Desktop Navigation --}}
        <nav class="hidden md:flex items-center space-x-6">
            <x-nav-link url="/" :active="request()->is('/')">
                Home
            </x-nav-link>

            <x-nav-link url="/services" :active="request()->is('services')">
                Services
            </x-nav-link>

            <x-nav-link
                url="/appointments"
                :active="request()->is('appointments')"
                icon="calendar"
            >
                Appointments
            </x-nav-link>

            <x-button-link
                url="/appointments/create"
                icon="calendar-plus"
                bgClass="bg-blue-100"
                hoverClass="hover:bg-white"
                textClass="text-sky-800"
            >
                Book Visit
            </x-button-link>
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
        <x-nav-link url="/" :active="request()->is('/')" :mobile="true">
            Home
        </x-nav-link>

        <x-nav-link url="/services" :active="request()->is('services')" :mobile="true">
            Services
        </x-nav-link>

        <x-nav-link
            url="/appointments"
            :active="request()->is('appointments')"
            :mobile="true"
            icon="calendar"
        >
            Appointments
        </x-nav-link>

        <x-button-link
            url="/appointments/create"
            icon="calendar-plus"
            bgClass="bg-blue-100"
            hoverClass="hover:bg-white"
            textClass="text-sky-800"
            :block="true"
        >
            Book Visit
        </x-button-link>
    </nav>
</header>
