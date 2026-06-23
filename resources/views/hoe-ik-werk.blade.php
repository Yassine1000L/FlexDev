@extends('layouts.app')

@section('title', 'Hoe ik werk | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-4xl mx-auto w-full">
            <p class="text-sm opacity-40 mb-4 tracking-widest uppercase">Werkwijze</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">Hoe Ik Werk</h2>
            <p class="text-base opacity-50 max-w-2xl mb-20 leading-relaxed">
                Van aanvraag tot oplevering — een gestructureerd proces dat zorgt voor duidelijkheid, kwaliteit en een resultaat dat volledig aan je verwachtingen voldoet.
            </p>

            <div class="space-y-16">
                <div class="flex gap-8 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-5xl md:text-7xl font-bold opacity-10 leading-none">01</span>
                    <div class="pt-3">
                        <h3 class="text-xl font-semibold mb-2">Aanvraag & Kennismaking</h3>
                        <p class="text-sm opacity-50 max-w-xl leading-relaxed">
                            Je neemt contact op via het formulier met je wensen en vragen. Ik bekijk je aanvraag en plan een gratis kennismaking om je project te bespreken.
                        </p>
                    </div>
                </div>

                <div class="flex gap-8 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-5xl md:text-7xl font-bold opacity-10 leading-none">02</span>
                    <div class="pt-3">
                        <h3 class="text-xl font-semibold mb-2">Analyse & Offerte</h3>
                        <p class="text-sm opacity-50 max-w-xl leading-relaxed">
                            Na het gesprek maak ik een gedetailleerde analyse en ontvang je een duidelijke offerte met de aanpak, planning en kosten. Geen verrassingen achteraf.
                        </p>
                    </div>
                </div>

                <div class="flex gap-8 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-5xl md:text-7xl font-bold opacity-10 leading-none">03</span>
                    <div class="pt-3">
                        <h3 class="text-xl font-semibold mb-2">Ontwikkeling</h3>
                        <p class="text-sm opacity-50 max-w-xl leading-relaxed">
                            Na jouw akkoord ga ik aan de slag. Ik werk in duidelijke fases en hou je regelmatig op de hoogte van de voortgang. Vragen of feedback? Je kunt altijd meedenken.
                        </p>
                    </div>
                </div>

                <div class="flex gap-8 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-5xl md:text-7xl font-bold opacity-10 leading-none">04</span>
                    <div class="pt-3">
                        <h3 class="text-xl font-semibold mb-2">Testen & Oplevering</h3>
                        <p class="text-sm opacity-50 max-w-xl leading-relaxed">
                            Ik test alles grondig voordat jij het eindresultaat ontvangt. Na jouw goedkeuring wordt de site online gezet of het project aan je overgedragen.
                        </p>
                    </div>
                </div>

                <div class="flex gap-8 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-5xl md:text-7xl font-bold opacity-10 leading-none">05</span>
                    <div class="pt-3">
                        <h3 class="text-xl font-semibold mb-2">Nazorg & Support</h3>
                        <p class="text-sm opacity-50 max-w-xl leading-relaxed">
                            Ook na oplevering sta ik voor je klaar. Voor vragen, kleine aanpassingen of problemen kun je altijd bij me terecht. Bij maandelijks onderhoud zorg ik dat alles up-to-date en veilig blijft.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-20">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-white text-black text-sm font-medium rounded-full hover:bg-white/90 transition-all">Start een project</a>
            </div>
        </div>
    </section>
@endsection
