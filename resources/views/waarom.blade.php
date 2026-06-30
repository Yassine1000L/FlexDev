@extends('layouts.app')

@section('title', __('Waarom Flex Dev') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-5xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Pourquoi') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4 text-center">{{ __('Waarom Flex Dev') }} ?</h2>
            <p class="text-base text-slate-300 max-w-2xl mx-auto mb-20 leading-relaxed text-center">
                {{ __('Waarom Flex Dev tekst') }}
            </p>

            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-blue-500/5 to-transparent p-8 hover:border-blue-400/30 hover:shadow-[0_0_40px_rgba(59,130,246,0.12)] transition-all duration-500" style="animation: fadeLeft 0.6s ease-out both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center mb-5 shadow-lg shadow-blue-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Réponse sous 24h') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Réponse sous 24h desc') }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-purple-500/5 to-transparent p-8 hover:border-purple-400/30 hover:shadow-[0_0_40px_rgba(168,85,247,0.12)] transition-all duration-500" style="animation: fadeRight 0.6s ease-out 0.2s both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center mb-5 shadow-lg shadow-purple-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Code propre et maintenable') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Code propre desc') }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-rose-500/5 to-transparent p-8 hover:border-rose-400/30 hover:shadow-[0_0_40px_rgba(244,63,94,0.12)] transition-all duration-500" style="animation: fadeLeft 0.6s ease-out 0.8s both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-rose-500 to-rose-600 flex items-center justify-center mb-5 shadow-lg shadow-rose-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Compatible mobile') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Compatible mobile desc') }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-amber-500/5 to-transparent p-8 hover:border-amber-400/30 hover:shadow-[0_0_40px_rgba(251,191,36,0.12)] transition-all duration-500" style="animation: fadeScale 0.6s ease-out 0.6s both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center mb-5 shadow-lg shadow-amber-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Support après livraison') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Support desc') }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-emerald-500/5 to-transparent p-8 hover:border-emerald-400/30 hover:shadow-[0_0_40px_rgba(52,211,153,0.12)] transition-all duration-500" style="animation: fadeUp 0.6s ease-out 0.4s both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center mb-5 shadow-lg shadow-emerald-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Tarifs compétitifs') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Tarifs desc') }}</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-cyan-500/5 to-transparent p-8 hover:border-cyan-400/30 hover:shadow-[0_0_40px_rgba(34,211,238,0.12)] transition-all duration-500" style="animation: fadeRight 0.6s ease-out 1s both">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-600 flex items-center justify-center mb-5 shadow-lg shadow-cyan-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Devis clair et transparent') }}</h3>
                    <p class="text-sm text-slate-400 leading-relaxed">{{ __('Devis desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeLeft { from { opacity: 0; transform: translateX(-40px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes fadeRight { from { opacity: 0; transform: translateX(40px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes fadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeScale { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
    </style>
@endsection
