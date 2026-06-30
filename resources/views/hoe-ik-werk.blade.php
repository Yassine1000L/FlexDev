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
                        ['icon' => '📞', 'title' => __('Premier contact'), 'desc' => __('Nous discutons de vos besoins et objectifs.')],
                        ['icon' => '📋', 'title' => __('Analyse'), 'desc' => __('Je prépare une proposition détaillée avec planning et budget.')],
                        ['icon' => '💻', 'title' => __('Développement'), 'desc' => __('Je développe votre projet en phases, avec des retours réguliers.')],
                        ['icon' => '🧪', 'title' => __('Tests'), 'desc' => __('Chaque fonctionnalité est testée avant validation.')],
                        ['icon' => '🚀', 'title' => __('Mise en ligne'), 'desc' => __('Votre site est publié et prêt à être utilisé.')],
                        ['icon' => '🛠', 'title' => __('Support'), 'desc' => __('Je reste disponible pour toute question ou amélioration.')],
                    ];
                @endphp

                @foreach ($steps as $i => $step)
                @php $isLeft = $i % 2 === 0; @endphp
                <div class="flex items-center gap-6 md:gap-12 mb-8 md:mb-0 relative">
                    {{-- Card --}}
                    <div class="w-full md:w-[42%] {{ $isLeft ? 'md:order-1' : 'md:order-3' }} {{ $isLeft ? 'md:text-right' : 'md:text-left' }}">
                        <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 to-slate-900/40 backdrop-blur-sm p-6 hover:border-blue-500/30 hover:shadow-[0_0_40px_rgba(59,130,246,0.12)] hover:-translate-y-1 transition-all duration-500 animate">
                            <span class="text-2xl md:text-3xl block mb-3">{{ $step['icon'] }}</span>
                            <h3 class="text-lg font-semibold mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>

                    {{-- Timeline dot --}}
                    <div class="hidden md:flex md:order-2 items-center justify-center w-12 h-12 rounded-full bg-blue-500/10 border-2 border-blue-500/30 shrink-0 relative z-10">
                        <span class="w-3 h-3 rounded-full bg-blue-400 shadow-lg shadow-blue-500/30"></span>
                    </div>

                    {{-- Empty spacer for right side --}}
                    <div class="hidden md:block md:w-[42%] md:order-3"></div>
                </div>
                @endforeach
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-blue-600 text-white text-sm font-medium rounded-full hover:bg-blue-500 transition-all shadow-lg shadow-blue-500/20">{{ __('Start een project') }}</a>
            </div>
        </div>
    </section>
@endsection
