<!DOCTYPE html>
<html lang="nl" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meti Barber — Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-950 text-white font-sans antialiased">
    {{-- Nav --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 py-5 flex items-center justify-between bg-zinc-900/80 backdrop-blur-xl border-b border-zinc-800">
        <span class="text-lg font-bold tracking-tight">Meti Barber</span>
        <div class="flex items-center gap-6">
            <a href="#services" class="text-xs text-zinc-400 hover:text-white transition-colors">Services</a>
            <a href="#hours" class="text-xs text-zinc-400 hover:text-white transition-colors">Uren</a>
            <a href="#contact" class="text-xs text-zinc-400 hover:text-white transition-colors">Contact</a>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="min-h-screen flex items-center justify-center px-6 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-zinc-950 via-transparent to-zinc-950 z-10"></div>
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1585747861115-d7f6458e9d6e?w=1920&q=80')] bg-cover bg-center opacity-20"></div>
        <div class="text-center relative z-20 max-w-3xl">
            <p class="text-xs tracking-[0.3em] uppercase text-amber-500 mb-4">Premium Barbershop</p>
            <h1 class="text-6xl md:text-8xl font-bold tracking-tight leading-none">Meti Barber</h1>
            <p class="mt-6 text-lg text-zinc-400 max-w-xl mx-auto leading-relaxed">Modern & klassiek barbier — waar stijl en vakmanschap samenkomen.</p>
            <div class="mt-10 flex gap-4 justify-center">
                <a href="#contact" class="px-8 py-3 bg-amber-600 text-white text-sm font-medium rounded-full hover:bg-amber-500 transition-all">Maak een afspraak</a>
                <a href="#services" class="px-8 py-3 border border-zinc-700 text-sm font-medium rounded-full hover:border-zinc-500 transition-all">Ontdek ons aanbod</a>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="py-28 px-6">
        <div class="max-w-5xl mx-auto">
            <p class="text-xs tracking-[0.3em] uppercase text-amber-500 mb-4 text-center">Onze Services</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-16 text-center">Wat Wij Bieden</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8 text-center hover:border-amber-600/30 hover:shadow-[0_0_30px_rgba(217,119,6,0.08)] transition-all">
                    <span class="text-4xl block mb-4">✂️</span>
                    <h3 class="text-xl font-semibold mb-2">Knippen & Stylen</h3>
                    <p class="text-sm text-zinc-400">Modern of klassiek — elk kapsel op maat gemaakt.</p>
                    <p class="text-lg font-bold text-amber-500 mt-4">€25</p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8 text-center hover:border-amber-600/30 hover:shadow-[0_0_30px_rgba(217,119,6,0.08)] transition-all">
                    <span class="text-4xl block mb-4">🧔</span>
                    <h3 class="text-xl font-semibold mb-2">Baard Styling</h3>
                    <p class="text-sm text-zinc-400">Professionele baardverzorging en trimmen.</p>
                    <p class="text-lg font-bold text-amber-500 mt-4">€18</p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/50 p-8 text-center hover:border-amber-600/30 hover:shadow-[0_0_30px_rgba(217,119,6,0.08)] transition-all">
                    <span class="text-4xl block mb-4">💆</span>
                    <h3 class="text-xl font-semibold mb-2">Complete Verzorging</h3>
                    <p class="text-sm text-zinc-400">Haar, baard, gezichtsverzorging en meer.</p>
                    <p class="text-lg font-bold text-amber-500 mt-4">€45</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Opening hours --}}
    <section id="hours" class="py-28 px-6 bg-zinc-900/30">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-xs tracking-[0.3em] uppercase text-amber-500 mb-4">Openingsuren</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-12">Wanneer Wij Open Zijn</h2>
            <div class="max-w-md mx-auto space-y-3">
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Maandag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Dinsdag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Woensdag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Donderdag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Vrijdag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3 border-b border-zinc-800">
                    <span class="text-zinc-400">Zaterdag</span><span class="font-medium">10:00 – 20:00</span>
                </div>
                <div class="flex justify-between py-3">
                    <span class="text-zinc-400">Zondag</span><span class="text-red-400">Gesloten</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Reviews --}}
    <section class="py-28 px-6">
        <div class="max-w-5xl mx-auto">
            <p class="text-xs tracking-[0.3em] uppercase text-amber-500 mb-4 text-center">Reviews</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-4 text-center">Wat Klanten Zeggen</h2>
            <p class="text-zinc-400 text-center mb-12">⭐ 5.0 — Uitstekende beoordelingen</p>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-6 text-center">
                    <div class="text-amber-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-sm text-zinc-300 italic">"Mijn eerste keer bij Meti Barber en volledig tevreden. Mijn kapsel werd exact zoals ik wilde."</p>
                    <p class="text-xs text-zinc-500 mt-4">— Kevin D.</p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-6 text-center">
                    <div class="text-amber-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-sm text-zinc-300 italic">"Voor baardstyling raad ik Meti Barber ten zeerste aan. Nog nooit zo'n goede service gezien."</p>
                    <p class="text-xs text-zinc-500 mt-4">— Tom V.</p>
                </div>
                <div class="rounded-2xl border border-zinc-800 bg-zinc-900/30 p-6 text-center">
                    <div class="text-amber-500 mb-3">⭐⭐⭐⭐⭐</div>
                    <p class="text-sm text-zinc-300 italic">"De sfeer is ontspannen en modern. Je voelt je echt een VIP."</p>
                    <p class="text-xs text-zinc-500 mt-4">— Sarah M.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="py-28 px-6 bg-zinc-900/30">
        <div class="max-w-5xl mx-auto">
            <p class="text-xs tracking-[0.3em] uppercase text-amber-500 mb-4 text-center">Contact</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-12 text-center">Maak Een Afspraak</h2>
            <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div>
                    <div class="flex items-start gap-4 mb-6">
                        <span class="text-xl">📍</span>
                        <div><p class="font-medium">Adres</p><p class="text-sm text-zinc-400">Jean Baptiste Nowélei 63/1, 1800 Vilvoorde</p></div>
                    </div>
                    <div class="flex items-start gap-4 mb-6">
                        <span class="text-xl">📞</span>
                        <div><p class="font-medium">Telefoon</p><p class="text-sm text-zinc-400">+32 476 35 34 07</p></div>
                    </div>
                    <div class="flex items-start gap-4 mb-6">
                        <span class="text-xl">🕐</span>
                        <div><p class="font-medium">Open</p><p class="text-sm text-zinc-400">Ma-Za: 10:00–20:00</p></div>
                    </div>
                    <a href="https://www.google.com/maps/search/Meti+Barber+Jean+Baptiste+Now%C3%A9lei+63/1+1800+Vilvoorde" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white text-sm font-medium rounded-full hover:bg-amber-500 transition-all mt-4">Route plannen →</a>
                </div>
                <div class="rounded-2xl overflow-hidden border border-zinc-800 h-64 bg-zinc-800">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.5!2d4.428!3d50.928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sJean+Baptiste+Now%C3%A9lei+63%2F1%2C+1800+Vilvoorde!5e0!3m2!1snl!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-10 text-center border-t border-zinc-800">
        <p class="text-sm text-zinc-500">&copy; 2026 Meti Barber. Alle rechten voorbehouden.</p>
        <p class="text-xs text-zinc-600 mt-2">Demo website gemaakt door <a href="https://flexdev.be" class="text-amber-500 hover:underline">Flex Dev</a></p>
    </footer>
</body>
</html>
