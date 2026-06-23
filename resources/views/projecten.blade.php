@extends('layouts.app')

@section('title', 'Projecten | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-24">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm opacity-40 mb-4 tracking-widest uppercase">Uitgelicht Werk</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-12 md:mb-20">Projecten</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="aspect-[4/3] bg-white/5 rounded-2xl flex items-center justify-center border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <span class="opacity-20 text-sm">Project 01</span>
                </div>
                <div class="aspect-[4/3] bg-white/5 rounded-2xl flex items-center justify-center border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <span class="opacity-20 text-sm">Project 02</span>
                </div>
                <div class="aspect-[4/3] bg-white/5 rounded-2xl flex items-center justify-center border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <span class="opacity-20 text-sm">Project 03</span>
                </div>
                <div class="aspect-[4/3] bg-white/5 rounded-2xl flex items-center justify-center border border-white/5 hover:border-white/20 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300 cursor-pointer">
                    <span class="opacity-20 text-sm">Project 04</span>
                </div>
            </div>
        </div>
    </section>
@endsection
