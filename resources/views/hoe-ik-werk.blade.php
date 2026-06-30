@extends('layouts.app')

@section('title', __('Hoe Ik Werk') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28 relative overflow-hidden">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[800px] rounded-full bg-blue-500/5 blur-[150px] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto w-full relative z-10">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase text-center">{{ __('Werkwijze') }}</p>
            <h2 class="text-3xl md:text-5xl font-bold tracking-tight mb-20 text-center">{{ __('Comment se déroule votre projet') }} ?</h2>

            <div class="relative">
                <div class="absolute left-1/2 -translate-x-px top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-500/40 via-blue-400/20 to-blue-500/40 hidden md:block"></div>

                @php
                    $steps = [
                        ['icon' => '📞', 'nr' => '01', 'title' => __('Premier contact'), 'desc' => __('Nous discutons de vos besoins et objectifs.')],
                        ['icon' => '📋', 'nr' => '02', 'title' => __('Analyse'), 'desc' => __('Je prépare une proposition détaillée avec planning et budget.')],
                        ['icon' => '💻', 'nr' => '03', 'title' => __('Développement'), 'desc' => __('Je développe votre projet en phases, avec des retours réguliers.')],
                        ['icon' => '🧪', 'nr' => '04', 'title' => __('Tests'), 'desc' => __('Chaque fonctionnalité est testée avant validation.')],
                        ['icon' => '🚀', 'nr' => '05', 'title' => __('Mise en ligne'), 'desc' => __('Votre site est publié et prêt à être utilisé.')],
                        ['icon' => '🛠', 'nr' => '06', 'title' => __('Support'), 'desc' => __('Je reste disponible pour toute question ou amélioration.')],
                    ];
                @endphp

                @foreach ($steps as $i => $step)
                @php $isLeft = $i % 2 === 0; @endphp
                <div class="flex items-center gap-3 md:gap-8 mb-8 md:mb-0 relative">
                    {{-- Left spacer (only when card is on right) --}}
                    @if (!$isLeft)
                    <div class="hidden md:block md:w-[42%]"></div>
                    @endif

                    {{-- Arrow + number --}}
                    <div class="hidden md:flex md:order-2 items-center gap-2 text-blue-400/50 text-xs font-bold tracking-widest shrink-0 {{ $isLeft ? 'ml-auto' : 'mr-auto' }}">
                        @if ($isLeft)
                        <span class="text-blue-400/60">{{ $step['nr'] }}</span>
                        <div class="w-16 h-px bg-gradient-to-r from-blue-400/40 to-transparent"></div>
                        <svg class="w-4 h-4 text-blue-400/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        @else
                        <svg class="w-4 h-4 text-blue-400/40" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                        <div class="w-16 h-px bg-gradient-to-l from-blue-400/40 to-transparent"></div>
                        <span class="text-blue-400/60">{{ $step['nr'] }}</span>
                        @endif
                    </div>

                    {{-- Card --}}
                    <div class="w-full md:w-[42%] md:order-3 {{ $isLeft ? 'md:order-1 md:text-right' : 'md:order-3 md:text-left' }}">
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-900/40 backdrop-blur-sm p-6 hover:border-blue-500/30 hover:shadow-[0_0_40px_rgba(59,130,246,0.12)] hover:-translate-y-1 transition-all duration-500 animate">
                            <span class="text-2xl md:text-3xl block mb-3">{{ $step['icon'] }}</span>
                            <span class="text-xs text-blue-400/60 font-medium mb-1 block md:hidden">{{ $step['nr'] }}</span>
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>

                    {{-- Right spacer (only when card is on left) --}}
                    @if ($isLeft)
                    <div class="hidden md:block md:w-[42%]"></div>
                    @endif

                    {{-- Timeline dot --}}
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-blue-500/10 border-2 border-blue-500/30 shrink-0 absolute left-1/2 -translate-x-1/2 z-10">
                        <span class="w-3 h-3 rounded-full bg-blue-400 shadow-lg shadow-blue-500/30"></span>
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
