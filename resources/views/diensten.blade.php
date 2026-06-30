@extends('layouts.app')

@section('title', __('Diensten') . ' | Flex Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-24">
        <div class="max-w-6xl mx-auto w-full">
            <p class="text-sm text-slate-400 mb-4 tracking-widest uppercase">{{ __('Wat Ik Doe') }}</p>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-12 md:mb-20">{{ __('Diensten') }}</h2>

            <div class="grid md:grid-cols-2 gap-8">
                @php
                    $images = [
                        '01' => 'https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?w=600&h=400&fit=crop&auto=format',
                        '02' => 'https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?w=600&h=400&fit=crop&auto=format',
                        '03' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop&auto=format',
                        '04' => 'https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?w=600&h=400&fit=crop&auto=format',
                        '05' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop&auto=format',
                        '06' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?w=600&h=400&fit=crop&auto=format',
                        '07' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop&auto=format',
                    ];
                    $services = [
                        ['nr' => '01', 'title' => __('Webontwikkeling'), 'desc' => __('Moderne, responsive websites en webapplicaties bouwen met Laravel, PHP en Tailwind CSS.')],
                        ['nr' => '02', 'title' => __('Bugfixing'), 'desc' => __('Problemen opsporen en oplossen in bestaande codebases — van front-end foutjes tot back-end logic errors.')],
                        ['nr' => '03', 'title' => __('Prestatieoptimalisatie'), 'desc' => __('Trage applicaties versnellen, queries optimaliseren en de gebruikerservaring verbeteren.')],
                        ['nr' => '04', 'title' => __('SEO Optimalisatie'), 'desc' => __('Je website beter vindbaar maken in Google. Technische optimalisatie, snellere laadtijd, juiste titels en omschrijvingen — zodat je hoger in de zoekresultaten komt.')],
                        ['nr' => '05', 'title' => __('Consulting & Advies'), 'desc' => __('Technische begeleiding op het gebied van architectuur, codekwaliteit en best practices.')],
                        ['nr' => '06', 'title' => __('Onderhoud & Support'), 'desc' => __('Maandelijks beheer van je website: updates, back-ups, veiligheid en kleine fixes. Jij hebt geen zorgen, ik zorg dat alles blijft draaien.')],
                        ['nr' => '07', 'title' => __('Responsive Fix'), 'desc' => __('Bestaande websites die alleen goed werken op pc worden door mij mobiel-vriendelijk gemaakt. Geen nieuwe site, gewoon fixen wat niet werkt op gsm en tablet.')],
                    ];
                @endphp
                @foreach ($services as $svc)
                <div class="rounded-xl overflow-hidden border border-white/10 hover:-translate-y-1 hover:shadow-[0_0_40px_rgba(59,130,246,0.15)] transition-all duration-300 animate">
                    <div class="aspect-[3/2] overflow-hidden bg-slate-800">
                        <img src="{{ $images[$svc['nr']] }}" alt="{{ $svc['title'] }}" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition-opacity duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <span class="text-sm font-bold text-blue-400/60">{{ $svc['nr'] }}</span>
                        <h3 class="text-xl font-semibold mt-1">{{ $svc['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-300 leading-relaxed">{{ $svc['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
