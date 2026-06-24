@extends('layouts.app')

@section('title', __('Diensten') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-24">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">{{ __('Wat Ik Doe') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-12 md:mb-20">{{ __('Diensten') }}</h2>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">01</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Webontwikkeling') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Moderne, responsive websites en webapplicaties bouwen met Laravel, PHP en Tailwind CSS.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">02</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Bugfixing') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Problemen opsporen en oplossen in bestaande codebases — van front-end foutjes tot back-end logic errors.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">03</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Prestatieoptimalisatie') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Trage applicaties versnellen, queries optimaliseren en de gebruikerservaring verbeteren.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">04</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('SEO Optimalisatie') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Je website beter vindbaar maken in Google. Technische optimalisatie, snellere laadtijd, juiste titels en omschrijvingen — zodat je hoger in de zoekresultaten komt.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">05</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Consulting & Advies') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Technische begeleiding op het gebied van architectuur, codekwaliteit en best practices.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">06</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Onderhoud & Support') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Maandelijks beheer van je website: updates, back-ups, veiligheid en kleine fixes. Jij hebt geen zorgen, ik zorg dat alles blijft draaien.') }}</p>
                </div>

                <div class="border-t border-blue-500/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <span class="text-3xl font-bold text-slate-600">07</span>
                    <h3 class="text-2xl font-semibold mt-4">{{ __('Responsive Fix') }}</h3>
                    <p class="mt-3 text-slate-300 leading-relaxed">{{ __('Bestaande websites die alleen goed werken op pc worden door mij mobiel-vriendelijk gemaakt. Geen nieuwe site, gewoon fixen wat niet werkt op gsm en tablet.') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection


