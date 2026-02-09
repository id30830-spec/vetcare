<section class="container mx-auto my-8 px-4">
    <div
        class="bg-gradient-to-r from-sky-600 to-blue-700
               text-white rounded-xl p-6
               flex flex-col md:flex-row
               items-center justify-between gap-4
               shadow-md"
    >
        <div>
            <h3 class="text-xl font-semibold">
                Need a vet visit?
            </h3>
            <p class="text-sm text-blue-100 mt-1">
                Book an appointment in seconds with our trusted vets
            </p>
        </div>

        <x-button-link
            url="/appointments/create"
            icon="calendar-plus"
            bgClass="bg-white"
            hoverClass="hover:bg-blue-50"
            textClass="text-blue-700 font-semibold"
        >
            Book Visit
        </x-button-link>
    </div>
</section>
