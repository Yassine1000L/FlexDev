@extends('layouts.app')

@section('title', 'Hoe ik werk | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-4xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">Werkwijze</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">Hoe Ik Werk</h2>
            <p class="text-base text-slate-300 max-w-2xl mb-20 leading-relaxed">
                Van aanvraag tot oplevering — een gestructureerd proces dat zorgt voor duidelijkheid, kwaliteit en een resultaat dat volledig aan je verwachtingen voldoet.
            </p>

            <div class="relative">
                <div class="absolute left-[23px] top-3 bottom-3 w-0.5 bg-gradient-to-b from-blue-500/40 via-blue-400/20 to-transparent"></div>

                <div class="space-y-16 relative">
                    @php $steps = [
                        ['nr' => '01', 'title' => 'Aanvraag & Kennismaking', 'desc' => 'Je neemt contact op via het formulier met je wensen en vragen. Ik bekijk je aanvraag en plan een gratis kennismaking om je project te bespreken.'],
                        ['nr' => '02', 'title' => 'Analyse & Offerte', 'desc' => 'Na het gesprek maak ik een gedetailleerde analyse en ontvang je een duidelijke offerte met de aanpak, planning en kosten. Geen verrassingen achteraf.'],
                        ['nr' => '03', 'title' => 'Ontwikkeling', 'desc' => 'Na jouw akkoord ga ik aan de slag. Ik werk in duidelijke fases en hou je regelmatig op de hoogte van de voortgang. Vragen of feedback? Je kunt altijd meedenken.'],
                        ['nr' => '04', 'title' => 'Testen & Oplevering', 'desc' => 'Ik test alles grondig voordat jij het eindresultaat ontvangt. Na jouw goedkeuring wordt de site online gezet of het project aan je overgedragen.'],
                        ['nr' => '05', 'title' => 'Nazorg & Support', 'desc' => 'Ook na oplevering sta ik voor je klaar. Voor vragen, kleine aanpassingen of problemen kun je altijd bij me terecht. Bij maandelijks onderhoud zorg ik dat alles up-to-date en veilig blijft.'],
                    ]; @endphp
                    @foreach ($steps as $step)
                    <div class="flex gap-6 rounded-xl p-4 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-300 animate">
                        <div class="relative shrink-0 mt-1">
                            <div class="w-12 h-12 rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center">
                                <span class="text-sm font-bold text-blue-400">{{ $step['nr'] }}</span>
                            </div>
                        </div>
                        <div class="pt-2">
                            <h3 class="text-xl font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-300 max-w-xl leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-20">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">Start een project</a>
            </div>
        </div>
    </section>
@endsection
