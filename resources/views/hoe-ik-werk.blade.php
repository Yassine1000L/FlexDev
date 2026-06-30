@extends('layouts.app')

@section('title', __('Hoe Ik Werk') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">{{ __('Werkwijze') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">{{ __('Hoe Ik Werk') }}</h2>
            <p class="text-base text-slate-300 max-w-2xl mb-20 leading-relaxed">
                {{ __('Van aanvraag tot oplevering — een gestructureerd proces dat zorgt voor duidelijkheid, kwaliteit en een resultaat dat volledig aan je verwachtingen voldoet.') }}
            </p>

            <div class="space-y-24 md:space-y-32">
                @php
                    $steps = [
                        ['nr' => '01', 'title' => __('Aanvraag & Kennismaking'), 'desc' => __('Je neemt contact op via het formulier met je wensen en vragen. Ik bekijk je aanvraag en plan een gratis kennismaking om je project te bespreken.'), 'gradient' => 'from-blue-500/20 via-indigo-500/10 to-transparent', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                        ['nr' => '02', 'title' => __('Analyse & Offerte'), 'desc' => __('Na het gesprek maak ik een gedetailleerde analyse en ontvang je een duidelijke offerte met de aanpak, planning en kosten. Geen verrassingen achteraf.'), 'gradient' => 'from-cyan-500/20 via-blue-500/10 to-transparent', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                        ['nr' => '03', 'title' => __('Ontwikkeling'), 'desc' => __('Na jouw akkoord ga ik aan de slag. Ik werk in duidelijke fases en hou je regelmatig op de hoogte van de voortgang. Vragen of feedback? Je kunt altijd meedenken.'), 'gradient' => 'from-violet-500/20 via-purple-500/10 to-transparent', 'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                        ['nr' => '04', 'title' => __('Testen & Oplevering'), 'desc' => __('Ik test alles grondig voordat jij het eindresultaat ontvangt. Na jouw goedkeuring wordt de site online gezet of het project aan je overgedragen.'), 'gradient' => 'from-emerald-500/20 via-teal-500/10 to-transparent', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['nr' => '05', 'title' => __('Nazorg & Support'), 'desc' => __('Ook na oplevering sta ik voor je klaar. Voor vragen, kleine aanpassingen of problemen kun je altijd bij me terecht. Bij maandelijks onderhoud zorg ik dat alles up-to-date en veilig blijft.'), 'gradient' => 'from-amber-500/20 via-orange-500/10 to-transparent', 'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'],
                    ];
                @endphp
                @foreach ($steps as $idx => $step)
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16 animate">
                    <div class="w-full md:w-1/2 order-2 md:order-1">
                        <span class="text-sm font-bold text-blue-400/60 tracking-widest">{{ $step['nr'] }}</span>
                        <h3 class="text-2xl md:text-3xl font-semibold tracking-tight mt-2 mb-4">{{ $step['title'] }}</h3>
                        <p class="text-sm md:text-base text-slate-300 leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                    <div class="w-full md:w-1/2 order-1 md:order-2">
                        <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-br {{ $step['gradient'] }} border border-white/5 shadow-2xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-white/40">{{ __('Stap') }} {{ $step['nr'] }}</p>
                                        <p class="text-sm font-medium text-white/80">{{ $step['title'] }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 md:w-32 md:h-32 rounded-full bg-white/5 backdrop-blur-xl border border-white/10 flex items-center justify-center">
                                <svg class="w-10 h-10 md:w-14 md:h-14 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="{{ $step['icon'] }}"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Start een project') }}</a>
            </div>
        </div>
    </section>
@endsection
