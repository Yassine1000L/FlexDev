@extends('layouts.app')

@section('title', 'Projecten | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-24">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm opacity-40 mb-4 tracking-widest uppercase">Uitgelicht Werk</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-12 md:mb-20">Projecten</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/5 to-white/[0.02] flex items-center justify-center">
                        <span class="opacity-20 text-sm">Binnenkort</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-base">Project 01</h3>
                        <p class="text-sm opacity-40 mt-1">Binnenkort meer informatie over dit project.</p>
                        <div class="flex items-center gap-2 mt-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10">Coming soon</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/5 to-white/[0.02] flex items-center justify-center">
                        <span class="opacity-20 text-sm">Binnenkort</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-base">Project 02</h3>
                        <p class="text-sm opacity-40 mt-1">Binnenkort meer informatie over dit project.</p>
                        <div class="flex items-center gap-2 mt-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10">Coming soon</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/5 to-white/[0.02] flex items-center justify-center">
                        <span class="opacity-20 text-sm">Binnenkort</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-base">Project 03</h3>
                        <p class="text-sm opacity-40 mt-1">Binnenkort meer informatie over dit project.</p>
                        <div class="flex items-center gap-2 mt-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10">Coming soon</span>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <div class="aspect-[4/3] bg-gradient-to-br from-white/5 to-white/[0.02] flex items-center justify-center">
                        <span class="opacity-20 text-sm">Binnenkort</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-semibold text-base">Project 04</h3>
                        <p class="text-sm opacity-40 mt-1">Binnenkort meer informatie over dit project.</p>
                        <div class="flex items-center gap-2 mt-3">
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-white/10">Coming soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
