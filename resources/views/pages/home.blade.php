<x-layout>

    {{-- Intro Section --}}
    <section class="bg-gradient-to-b from-sky-200 to-white py-20">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-indigo-900">
                Welcome to VetCare
            </h1>

            <p class="mt-4 text-lg text-slate-800">
                Professional, friendly, and reliable veterinary care for your pets.
            </p>
        </div>
    </section>

    {{-- About Us Section --}}
    <section class="bg-gradient-to-b from-white to-sky-100 py-20">
        <div class="max-w-5xl mx-auto px-6 grid gap-10 md:grid-cols-2 items-center">

            {{-- Text --}}
            <div>
                <h2 class="text-3xl font-bold text-indigo-900 mb-4">
                    About VetCare 🐾
                </h2>

                <p class="text-slate-700 leading-relaxed mb-4">
                    VetCare is dedicated to providing compassionate, high‑quality
                    veterinary services for pets of all kinds. Our experienced team
                    focuses on prevention, care, and comfort to ensure your pet lives
                    a healthy and happy life.
                </p>

                <p class="text-slate-700 leading-relaxed">
                    We believe every pet deserves personalized attention in a calm,
                    friendly environment — because your pets are family.
                </p>
            </div>

            {{-- Highlights --}}
            <div class="bg-white rounded-2xl shadow-sm p-8 space-y-6">

                <div class="flex items-start gap-4">
                    <i class="fa fa-stethoscope text-indigo-900 text-xl mt-1"></i>
                    <div>
                        <h4 class="font-semibold text-slate-800">Experienced Professionals</h4>
                        <p class="text-slate-600 text-sm">
                            Skilled veterinarians with a passion for animal care.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <i class="fa fa-heart text-indigo-900 text-xl mt-1"></i>
                    <div>
                        <h4 class="font-semibold text-slate-800">Pet‑First Philosophy</h4>
                        <p class="text-slate-600 text-sm">
                            Every decision is made with your pet’s well‑being in mind.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <i class="fa fa-paw text-indigo-900 text-xl mt-1"></i>
                    <div>
                        <h4 class="font-semibold text-slate-800">Modern Care</h4>
                        <p class="text-slate-600 text-sm">
                            Up‑to‑date treatments in a safe, welcoming clinic.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

</x-layout>
