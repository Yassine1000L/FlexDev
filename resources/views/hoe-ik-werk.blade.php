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
                <div class="hidden md:grid md:grid-cols-[1fr_auto_1fr] items-center gap-6 mb-6 relative">
                    {{-- Left column: Card or Empty --}}
                    <div class="{{ $isLeft ? '' : 'invisible' }} text-right">
                        @if ($isLeft)
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-900/40 backdrop-blur-sm p-6 hover:border-blue-500/30 hover:shadow-[0_0_40px_rgba(59,130,246,0.12)] hover:-translate-y-1 transition-all duration-500 inline-block text-left w-full max-w-md ml-auto animate">
                            <span class="text-2xl block mb-3">{{ $step['icon'] }}</span>
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                        @endif
                    </div>

                    {{-- Center: Arrow + Number + Dot --}}
                    <div class="flex flex-col items-center">
                        <div class="flex items-center gap-2 text-blue-400/50 text-xs font-bold tracking-widest mb-2">
                            @if ($isLeft)
                            <span>{{ $step['nr'] }}</span>
                            <div class="w-12 h-px bg-gradient-to-r from-blue-400/40 to-blue-400/10"></div>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            @else
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                            <div class="w-12 h-px bg-gradient-to-l from-blue-400/40 to-blue-400/10"></div>
                            <span>{{ $step['nr'] }}</span>
                            @endif
                        </div>
                        <div class="w-10 h-10 rounded-full bg-blue-500/10 border-2 border-blue-500/30 flex items-center justify-center">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-400 shadow-lg shadow-blue-500/30"></span>
                        </div>
                    </div>

                    {{-- Right column: Card or Empty --}}
                    <div class="{{ !$isLeft ? '' : 'invisible' }} text-left">
                        @if (!$isLeft)
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-900/40 backdrop-blur-sm p-6 hover:border-blue-500/30 hover:shadow-[0_0_40px_rgba(59,130,246,0.12)] hover:-translate-y-1 transition-all duration-500 inline-block w-full max-w-md animate">
                            <span class="text-2xl block mb-3">{{ $step['icon'] }}</span>
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Mobile layout --}}
                <div class="md:hidden flex gap-4 mb-6 animate">
                    <div class="flex flex-col items-center shrink-0">
                        <span class="text-xs text-blue-400/60 font-medium mb-1">{{ $step['nr'] }}</span>
                        <div class="w-10 h-10 rounded-full bg-blue-500/10 border-2 border-blue-500/30 flex items-center justify-center">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-400"></span>
                        </div>
                        @if (!$loop->last)
                        <div class="w-0.5 h-full min-h-[20px] bg-gradient-to-b from-blue-400/30 to-transparent"></div>
                        @endif
                    </div>
                    <div class="flex-1 rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-900/40 backdrop-blur-sm p-5 hover:border-blue-500/30 transition-all duration-500">
                        <span class="text-xl block mb-2">{{ $step['icon'] }}</span>
                        <h3 class="text-base font-semibold mb-1">{{ $step['title'] }}</h3>
                        <p class="text-xs text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
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
