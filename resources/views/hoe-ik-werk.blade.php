@extends('layouts.app')

@section('title', __('Hoe Ik Werk') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-5xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">{{ __('Werkwijze') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">{{ __('Hoe Ik Werk') }}</h2>
            <p class="text-base text-slate-300 max-w-2xl mb-20 leading-relaxed">
                {{ __('Van aanvraag tot oplevering — een gestructureerd proces dat zorgt voor duidelijkheid, kwaliteit en een resultaat dat volledig aan je verwachtingen voldoet.') }}
            </p>

            <div class="flex flex-col items-center">
                @php
                    $steps = [
                        ['nr' => '01', 'title' => __('Aanvraag & Kennismaking'), 'desc' => __('Je neemt contact op via het formulier met je wensen en vragen.')],
                        ['nr' => '02', 'title' => __('Analyse & Offerte'), 'desc' => __('Je ontvangt een duidelijke offerte met de aanpak, planning en kosten.')],
                        ['nr' => '03', 'title' => __('Ontwikkeling'), 'desc' => __('Ik ga aan de slag in duidelijke fases en hou je op de hoogte.')],
                        ['nr' => '04', 'title' => __('Testen & Oplevering'), 'desc' => __('Alles wordt grondig getest voordat het eindresultaat wordt opgeleverd.')],
                        ['nr' => '05', 'title' => __('Nazorg & Support'), 'desc' => __('Ook na oplevering sta ik klaar voor vragen of onderhoud.')],
                    ];
                @endphp

                @foreach ($steps as $i => $step)
                <div class="flex flex-col items-center animate">
                    <div class="w-full max-w-lg rounded-2xl border border-white/10 bg-slate-900/50 p-6 hover:border-blue-500/30 hover:shadow-[0_0_30px_rgba(59,130,246,0.1)] transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/20 shrink-0">
                                <span class="text-sm font-bold text-white">{{ $step['nr'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-base font-semibold">{{ $step['title'] }}</h3>
                                <p class="text-xs text-slate-400 mt-0.5">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @if (!$loop->last)
                    <div class="flex flex-col items-center py-3">
                        <div class="w-px h-6 border-l border-dashed border-blue-400/30"></div>
                        <svg class="w-4 h-4 text-blue-400/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Start een project') }}</a>
            </div>
        </div>
    </section>
@endsection
