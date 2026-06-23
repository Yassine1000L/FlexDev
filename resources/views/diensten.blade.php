@extends('layouts.app')

@section('title', 'Diensten | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-24">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm opacity-40 mb-4 tracking-widest uppercase">Wat Ik Doe</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-12 md:mb-20">Diensten</h2>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">01</span>
                    <h3 class="text-2xl font-semibold mt-4">Webontwikkeling</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Moderne, responsive websites en webapplicaties bouwen.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">02</span>
                    <h3 class="text-2xl font-semibold mt-4">Bugfixing</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Problemen opsporen en oplossen in bestaande codebases — van front-end foutjes tot back-end logic errors.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">03</span>
                    <h3 class="text-2xl font-semibold mt-4">Prestatieoptimalisatie</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Trage applicaties versnellen, queries optimaliseren en de gebruikerservaring verbeteren.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">04</span>
                    <h3 class="text-2xl font-semibold mt-4">SEO Optimalisatie</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Je website beter vindbaar maken in Google. Technische optimalisatie, snellere laadtijd, juiste titels en omschrijvingen — zodat je hoger in de zoekresultaten komt.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">05</span>
                    <h3 class="text-2xl font-semibold mt-4">Consulting & Advies</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Technische begeleiding op het gebied van architectuur, codekwaliteit en best practices.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">06</span>
                    <h3 class="text-2xl font-semibold mt-4">Onderhoud & Support</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Maandelijks beheer van je website: updates, back-ups, veiligheid en kleine fixes. Jij hebt geen zorgen, ik zorg dat alles blijft draaien.</p>
                </div>

                <div class="border-t border-white/10 pt-8 rounded-xl p-6 hover:-translate-y-1 hover:shadow-xl hover:shadow-white/5 transition-all duration-300">
                    <span class="text-3xl font-bold opacity-20">07</span>
                    <h3 class="text-2xl font-semibold mt-4">Responsive Fix</h3>
                    <p class="mt-3 opacity-50 leading-relaxed">Bestaande websites die alleen goed werken op pc worden door mij mobiel-vriendelijk gemaakt. Geen nieuwe site, gewoon fixen wat niet werkt op gsm en tablet.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
