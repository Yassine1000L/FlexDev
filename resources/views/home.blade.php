@extends('layouts.app')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28 relative overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] md:w-[800px] md:h-[800px] rounded-full bg-blue-500/10 blur-[120px] pointer-events-none"></div>
        <div class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-1/4 opacity-[0.04] pointer-events-none select-none hidden md:block">
            <svg viewBox="0 0 32 32" class="w-[500px] h-[500px]">
                <rect width="32" height="32" rx="6" fill="white"/>
                <text x="16" y="24" text-anchor="middle" fill="black" font-family="system-ui" font-weight="700" font-size="22">F</text>
            </svg>
        </div>
        <div class="max-w-6xl mx-auto w-full relative z-10">
            <p class="text-sm text-slate-400 mb-6 tracking-widest uppercase">{{ __('Developer & Probleemoplosser') }}</p>
            <h1 class="text-4xl sm:text-7xl md:text-9xl font-bold tracking-tight leading-none">
                {{ __('Ik Bouw') }}<br>
                <span class="text-slate-200">{{ __('Ik Fix') }}</span>
            </h1>
            <p class="mt-8 text-lg md:text-xl text-slate-300 max-w-xl leading-relaxed">
                {{ __('Realisatie van WebDevelopement - met onderhoud, aanpassingen, optimalisatie en bugfixing.') }}
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Neem contact op') }}</a>
                <a href="{{ route('projecten') }}" class="inline-flex items-center px-8 py-3 border border-blue-500/30 text-sm font-medium rounded-full hover:border-blue-400/60 hover:bg-blue-500/5 transition-all">{{ __('Bekijk mijn werk') }}</a>
            </div>
            <div class="mt-16 max-w-2xl animate">
                <h2 class="text-lg md:text-2xl font-semibold tracking-tight mb-4">{{ __('Over Flex Dev') }}</h2>
                <p class="text-base text-slate-300 leading-relaxed">
                    {{ __('Flex Dev staat voor de ontwikkeling en optimalisatie van webapplicaties en websites. Van het bouwen van maatwerk-platforms tot het doorvoeren van gerichte aanpassingen en het oplossen van complexe technische vraagstukken — elk project wordt uitgevoerd met oog voor kwaliteit, performantie en gebruiksgemak. Mijn aanpak is gestructureerd, transparant en gericht op een duurzaam resultaat.') }}
                </p>
            </div>
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl animate">
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">5+</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Projecten gerealiseerd') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">3+</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Jaar ervaring') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                    <span class="text-2xl font-bold text-blue-400">100%</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Tevreden klanten') }}</p>
                </div>
                <div class="rounded-xl border border-blue-500/10 bg-blue-500/5 p-5 text-center hover:-translate-y-1 hover:shadow-[0_0_30px_rgba(59,130,246,0.12)] transition-all duration-300">
                    <svg class="w-6 h-6 mx-auto mb-2 text-blue-400/60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="text-2xl font-bold text-blue-400">24u</span>
                    <p class="text-xs text-slate-400 mt-1">{{ __('Reactietijd') }}</p>
                </div>
            </div>
            <div class="mt-20 max-w-3xl animate">
                <h2 class="text-lg md:text-2xl font-semibold tracking-tight mb-6 md:mb-8">{{ __('Technologieën') }}</h2>
                <div class="flex flex-wrap gap-x-6 gap-y-3">
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><circle cx="32" cy="32" r="30" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="14">P</text></svg>
                        <span class="text-xs opacity-70">PHP</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><rect x="2" y="2" width="60" height="60" rx="8" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="10">L</text></svg>
                        <span class="text-xs opacity-70">Laravel</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><path d="M8 8 L56 8 L56 48 L32 60 L8 48 Z" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="9">T</text></svg>
                        <span class="text-xs opacity-70">Tailwind</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><rect x="4" y="12" width="56" height="40" rx="4" fill="none" stroke="white" stroke-width="2"/><line x1="4" y1="24" x2="60" y2="24" stroke="white" stroke-width="2"/><line x1="32" y1="24" x2="32" y2="52" stroke="white" stroke-width="2"/></svg>
                        <span class="text-xs opacity-70">SQLite</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><rect x="6" y="6" width="52" height="52" rx="4" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="12">JS</text></svg>
                        <span class="text-xs opacity-70">JavaScript</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><path d="M12 10 L52 10 L52 38 L38 38 L38 54 L12 54 Z" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="8">HTML</text></svg>
                        <span class="text-xs opacity-70">HTML/CSS</span>
                    </div>
                    <div class="flex items-center gap-2 text-slate-300 hover:opacity-80 hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        <svg viewBox="0 0 64 64" class="w-5 h-5 shrink-0"><circle cx="32" cy="32" r="26" fill="none" stroke="white" stroke-width="2"/><text x="32" y="39" text-anchor="middle" fill="white" font-family="system-ui" font-weight="600" font-size="11">J</text></svg>
                        <span class="text-xs opacity-70">Java</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
