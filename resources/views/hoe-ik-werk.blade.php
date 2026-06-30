@extends('layouts.app')

@section('title', __('Hoe Ik Werk') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-4xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">{{ __('Werkwijze') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">{{ __('Hoe Ik Werk') }}</h2>
            <p class="text-base text-slate-300 max-w-2xl mb-20 leading-relaxed">
                {{ __('Van aanvraag tot oplevering — een gestructureerd proces dat zorgt voor duidelijkheid, kwaliteit en een resultaat dat volledig aan je verwachtingen voldoet.') }}
            </p>

            <div class="relative">
                <div class="absolute left-[19px] top-2 bottom-2 w-px bg-gradient-to-b from-blue-500/40 via-blue-400/10 to-transparent"></div>

                <div class="space-y-12">
                    @php
                        $steps = [
                            ['nr' => '01', 'title' => __('Aanvraag & Kennismaking'), 'desc' => __('Je neemt contact op via het formulier met je wensen en vragen. Ik bekijk je aanvraag en plan een gratis kennismaking om je project te bespreken.')],
                            ['nr' => '02', 'title' => __('Analyse & Offerte'), 'desc' => __('Na het gesprek maak ik een gedetailleerde analyse en ontvang je een duidelijke offerte met de aanpak, planning en kosten. Geen verrassingen achteraf.')],
                            ['nr' => '03', 'title' => __('Ontwikkeling'), 'desc' => __('Na jouw akkoord ga ik aan de slag. Ik werk in duidelijke fases en hou je regelmatig op de hoogte van de voortgang. Vragen of feedback? Je kunt altijd meedenken.')],
                            ['nr' => '04', 'title' => __('Testen & Oplevering'), 'desc' => __('Ik test alles grondig voordat jij het eindresultaat ontvangt. Na jouw goedkeuring wordt de site online gezet of het project aan je overgedragen.')],
                            ['nr' => '05', 'title' => __('Nazorg & Support'), 'desc' => __('Ook na oplevering sta ik voor je klaar. Voor vragen, kleine aanpassingen of problemen kun je altijd bij me terecht. Bij maandelijks onderhoud zorg ik dat alles up-to-date en veilig blijft.')],
                        ];
                    @endphp
                    @foreach ($steps as $step)
                    <div class="flex gap-6 pl-10 relative animate">
                        <div class="absolute left-0 top-1 w-[39px] h-[39px] rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center">
                            <span class="text-xs font-bold text-blue-400">{{ $step['nr'] }}</span>
                        </div>
                        <div class="pt-1.5">
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-300 leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Start een project') }}</a>
            </div>
        </div>
    </section>
@endsection
