@extends('layouts.app')

@section('title', 'Contact | Flux Dev')

@section('content')
    <section class="min-h-screen flex flex-col justify-center px-6 pt-28">
        <div class="max-w-3xl mx-auto w-full">
            @if (session('success'))
                <div class="mb-8 p-8 bg-white/5 rounded-2xl border border-white/10 text-center">
                    <div class="w-14 h-14 rounded-full bg-white/10 mx-auto mb-5 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <p class="text-lg font-medium mb-2">Bericht Ontvangen!</p>
                    <p class="text-sm opacity-60 leading-relaxed max-w-md mx-auto">{{ session('success') }}</p>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 mt-6 border border-white/20 text-sm font-medium rounded-full hover:border-white/40 hover:bg-white/5 transition-all">&larr; Terug naar home</a>
                </div>
            @else
                <p class="text-sm opacity-40 mb-4 tracking-widest uppercase">Laten we Praten</p>
                <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-4">Neem Contact Op</h2>
                <p class="text-lg opacity-50 max-w-xl mb-12 leading-relaxed">
                    Doorloop de stappen zodat ik precies weet wat je nodig hebt.
                </p>

            <form action="{{ route('contact.store') }}" method="POST" id="contactForm" novalidate>
                @csrf
                <input type="hidden" name="service" id="serviceInput">
                <input type="hidden" name="details" id="detailsInput">

                {{-- Step 1 --}}
                <div class="step" data-step="1">
                    <p class="text-xs opacity-30 mb-8">Stap 1 van 3</p>
                    <h3 class="text-2xl font-semibold mb-8">Waar kunnen we je mee helpen?</h3>
                    <div class="space-y-3">
                        <button type="button" class="choice-btn w-full text-left px-6 py-4 rounded-xl border border-white/10 hover:border-white/40 bg-white/5 hover:bg-white/10 transition-all cursor-pointer border-l-[3px] border-l-transparent" data-value="Nieuw project">
                            <span class="font-medium">Ik wil een nieuw project starten</span>
                            <p class="text-sm opacity-40 mt-1">Van concept tot oplevering — ik bouw jouw idee.</p>
                        </button>
                        <button type="button" class="choice-btn w-full text-left px-6 py-4 rounded-xl border border-white/10 hover:border-white/40 bg-white/5 hover:bg-white/10 transition-all cursor-pointer border-l-[3px] border-l-transparent" data-value="Aanpassing">
                            <span class="font-medium">Ik wil een bestaande website aanpassen of verbeteren</span>
                            <p class="text-sm opacity-40 mt-1">Nieuwe functies, redesign of uitbreiding van je huidige site.</p>
                        </button>
                        <button type="button" class="choice-btn w-full text-left px-6 py-4 rounded-xl border border-white/10 hover:border-white/40 bg-white/5 hover:bg-white/10 transition-all cursor-pointer border-l-[3px] border-l-transparent" data-value="Bugfixing">
                            <span class="font-medium">Ik wil een bug laten oplossen</span>
                            <p class="text-sm opacity-40 mt-1">Iets werkt niet naar behoren? Ik zoek het voor je uit.</p>
                        </button>
                        <button type="button" class="choice-btn w-full text-left px-6 py-4 rounded-xl border border-white/10 hover:border-white/40 bg-white/5 hover:bg-white/10 transition-all cursor-pointer border-l-[3px] border-l-transparent" data-value="Optimalisatie">
                            <span class="font-medium">Ik wil een bestaand project optimaliseren</span>
                            <p class="text-sm opacity-40 mt-1">Snelheid, codekwaliteit of gebruikerservaring verbeteren.</p>
                        </button>
                        <button type="button" class="choice-btn w-full text-left px-6 py-4 rounded-xl border border-white/10 hover:border-white/40 bg-white/5 hover:bg-white/10 transition-all cursor-pointer border-l-[3px] border-l-transparent" data-value="Anders">
                            <span class="font-medium">Anders</span>
                            <p class="text-sm opacity-40 mt-1">Iets anders? Geef het aan in stap 3.</p>
                        </button>
                    </div>
                    @error('service') <p class="text-red-400/70 text-xs mt-3">{{ $message }}</p> @enderror
                </div>

                {{-- Step 2 --}}
                <div class="step hidden" data-step="2">
                    <p class="text-xs opacity-30 mb-8">Stap 2 van 3</p>
                    <h3 class="text-2xl font-semibold mb-8">Nog een paar vragen</h3>
                    <p id="step2Error" class="hidden text-red-400/80 text-sm mb-6">Maak eerst een keuze</p>

                    {{-- Vragen voor Nieuw project --}}
                    <div class="step-questions" data-for="Nieuw project">
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Wat voor project?</label>
                            <select name="q_project_type" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Webshop" class="bg-neutral-800">Webshop</option>
                                <option value="Website" class="bg-neutral-800">Website</option>
                                <option value="Webapplicatie" class="bg-neutral-800">Webapplicatie</option>
                                <option value="Anders" class="bg-neutral-800">Anders</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Heeft u al een ontwerp?</label>
                            <select name="q_design" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Ja" class="bg-neutral-800">Ja</option>
                                <option value="Nee" class="bg-neutral-800">Nee, ik heb hulp nodig bij het ontwerp</option>
                                <option value="Gedeeltelijk" class="bg-neutral-800">Gedeeltelijk</option>
                            </select>
                        </div>
                    </div>

                    {{-- Vragen voor Aanpassing --}}
                    <div class="step-questions hidden" data-for="Aanpassing">
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Wat moet er aangepast worden?</label>
                            <select name="q_what_change" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Design" class="bg-neutral-800">Design / lay-out aanpassen</option>
                                <option value="Functionaliteit" class="bg-neutral-800">Nieuwe functionaliteit toevoegen</option>
                                <option value="Inhoud" class="bg-neutral-800">Inhoud / tekst aanpassen</option>
                                <option value="Anders" class="bg-neutral-800">Anders</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Heeft u een bestaande site?</label>
                            <select name="q_has_site" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Ja" class="bg-neutral-800">Ja, die kan ik laten zien</option>
                                <option value="Ja_offline" class="bg-neutral-800">Ja, maar staat nog niet online</option>
                                <option value="Nee" class="bg-neutral-800">Nee, moet nog gebouwd worden</option>
                            </select>
                        </div>
                    </div>

                    {{-- Vragen voor Bugfixing --}}
                    <div class="step-questions hidden" data-for="Bugfixing">
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Waar situeert het probleem zich?</label>
                            <select name="q_bug_location" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Front-end" class="bg-neutral-800">Front-end (weergave / design)</option>
                                <option value="Back-end" class="bg-neutral-800">Back-end (functionaliteit / server)</option>
                                <option value="Database" class="bg-neutral-800">Database</option>
                                <option value="Anders" class="bg-neutral-800">Weet ik niet / anders</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Hoe dringend is het?</label>
                            <select name="q_urgency" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Zeer dringend" class="bg-neutral-800">Zeer dringend (site ligt plat)</option>
                                <option value="Binnen week" class="bg-neutral-800">Binnen een week</option>
                                <option value="Geen haast" class="bg-neutral-800">Geen haast</option>
                            </select>
                        </div>
                    </div>

                    {{-- Vragen voor Optimalisatie --}}
                    <div class="step-questions hidden" data-for="Optimalisatie">
                        <div class="mb-6">
                            <label class="block text-sm opacity-60 mb-2">Wat moet geoptimaliseerd worden?</label>
                            <select name="q_optimize_what" class="detail-field w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                                <option value="" class="bg-neutral-800" selected>Maak een keuze</option>
                                <option value="Snelheid" class="bg-neutral-800">Snelheid / laadtijd</option>
                                <option value="Codekwaliteit" class="bg-neutral-800">Codekwaliteit</option>
                                <option value="Database" class="bg-neutral-800">Database optimalisatie</option>
                                <option value="SEO" class="bg-neutral-800">SEO / vindbaarheid</option>
                                <option value="Anders" class="bg-neutral-800">Anders</option>
                            </select>
                        </div>
                    </div>

                    {{-- Vragen voor Anders --}}
                    <div class="step-questions hidden" data-for="Anders">
                        <p class="text-sm opacity-40">Geef in de volgende stap een toelichting van je vraag.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="step hidden" data-step="3">
                    <p class="text-xs opacity-30 mb-8">Stap 3 van 3</p>
                    <h3 class="text-2xl font-semibold mb-8">Uw gegevens</h3>
                    <p id="step3Error" class="hidden text-red-400/80 text-sm mb-6">Maak eerst een keuze</p>

                    <div class="mb-6">
                        <input type="text" name="name" placeholder="Uw naam" required
                            class="w-full bg-transparent border-b border-white/20 py-3 text-base md:text-sm outline-none focus:border-white/60 transition-colors placeholder:opacity-30">
                        @error('name') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-6">
                        <input type="email" name="email" placeholder="Uw e-mailadres" required
                            class="w-full bg-transparent border-b border-white/20 py-3 text-base md:text-sm outline-none focus:border-white/60 transition-colors placeholder:opacity-30">
                        @error('email') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-6">
                        <input type="tel" name="phone" placeholder="Telefoonnummer (optioneel)"
                            class="w-full bg-transparent border-b border-white/20 py-3 text-base md:text-sm outline-none focus:border-white/60 transition-colors placeholder:opacity-30">
                        @error('phone') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-6">
                        <input type="text" name="company" placeholder="Bedrijfsnaam (optioneel)"
                            class="w-full bg-transparent border-b border-white/20 py-3 text-base md:text-sm outline-none focus:border-white/60 transition-colors placeholder:opacity-30">
                        @error('company') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div id="preferenceField" class="mb-6 hidden">
                        <label class="block text-sm opacity-60 mb-2">Hoe wenst u gecontacteerd te worden?</label>
                        <select name="preference" class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors">
                            <option value="" class="bg-neutral-800">Maak een keuze</option>
                            <option value="WhatsApp" class="bg-neutral-800">WhatsApp</option>
                            <option value="E-mail" class="bg-neutral-800">E-mail</option>
                        </select>
                        @error('preference') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-8">
                        <textarea name="message" rows="4" placeholder="Extra toelichting (optioneel)"
                            class="w-full bg-transparent border-b border-white/20 py-3 text-sm outline-none focus:border-white/60 transition-colors placeholder:opacity-30 resize-none"></textarea>
                        @error('message') <p class="text-red-400/70 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Navigation --}}
                <div class="flex items-center justify-between mt-10">
                    <button type="button" id="prevBtn" class="px-6 py-3 text-sm opacity-40 hover:opacity-70 transition-opacity hidden">&larr; Vorige</button>
                    <button type="button" id="nextBtn" class="px-8 py-3 bg-white text-black text-sm font-medium rounded-full hover:bg-white/90 transition-all cursor-pointer">Volgende</button>
                    <button type="submit" id="submitBtn" class="px-8 py-3 bg-white text-black text-sm font-medium rounded-full hover:bg-white/90 transition-all hidden cursor-pointer">Verstuur</button>
                </div>
            </form>

            @endif
        </div>
    </section>

    <script>
        let currentStep = 1;
        const totalSteps = 3;
        const form = document.getElementById('contactForm');

        function updateButtons() {
            document.getElementById('prevBtn').classList.toggle('hidden', currentStep === 1);
            document.getElementById('nextBtn').classList.toggle('hidden', currentStep !== 2);
            document.getElementById('submitBtn').classList.toggle('hidden', currentStep !== totalSteps);
        }

        function showStep(step) {
            document.querySelectorAll('.step').forEach(s => s.classList.add('hidden'));
            document.querySelector(`.step[data-step="${step}"]`).classList.remove('hidden');
            updateButtons();
        }

        // Step 1: choice buttons → auto next
        document.querySelectorAll('.choice-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.choice-btn').forEach(b => {
                    b.classList.remove('border-white/60', 'bg-white/15', 'selected');
                    b.classList.add('border-white/10', 'bg-white/5');
                });
                btn.classList.remove('border-white/10', 'bg-white/5');
                btn.classList.add('border-white/60', 'bg-white/15', 'selected');
                document.getElementById('serviceInput').value = btn.dataset.value;

                const service = btn.dataset.value;
                document.querySelectorAll('.step-questions').forEach(q => q.classList.add('hidden'));
                document.querySelectorAll(`.step-questions[data-for="${service}"]`).forEach(q => q.classList.remove('hidden'));

                if (service === 'Anders') {
                    currentStep = 3;
                    showStep(3);
                } else {
                    currentStep = 2;
                    showStep(2);
                }
            });
        });

        // Step 2: no auto-advance (user fills in 2 fields, then clicks Volgende)

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep === 2) {
                const visibleQuestions = document.querySelector('.step-questions:not(.hidden)');
                if (visibleQuestions) {
                    const fields = visibleQuestions.querySelectorAll('.detail-field');
                    let allFilled = true;
                    fields.forEach(f => { if (!f.value) allFilled = false; });
                    if (!allFilled) {
                        document.getElementById('step2Error').classList.remove('hidden');
                        return;
                    }
                }
            }
            document.getElementById('step2Error').classList.add('hidden');
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        });

        // Show preference field when phone is filled
        document.querySelector('input[name="phone"]').addEventListener('input', (e) => {
            const field = document.getElementById('preferenceField');
            if (e.target.value.trim()) {
                field.classList.remove('hidden');
            } else {
                field.classList.add('hidden');
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Step 3: validate before submit
        form.addEventListener('submit', (e) => {
            if (currentStep === totalSteps) {
                const name = document.querySelector('input[name="name"]').value;
                const email = document.querySelector('input[name="email"]').value;
                if (!name || !email) {
                    e.preventDefault();
                    document.getElementById('step3Error').classList.remove('hidden');
                    return;
                }
            }
            document.getElementById('step3Error').classList.add('hidden');
            const details = {};
            document.querySelectorAll('.detail-field').forEach(field => {
                if (field.value) {
                    const label = field.closest('.mb-6')?.querySelector('label')?.textContent?.trim() || field.name;
                    details[field.name] = field.value;
                }
            });
            document.getElementById('detailsInput').value = JSON.stringify(details);
        });

        showStep(1);
    </script>

    <style>
        .choice-btn.selected {
            border-left-color: white !important;
            position: relative;
        }
        .choice-btn.selected::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 0.75rem;
            box-shadow: 0 0 25px rgba(255,255,255,0.08);
            pointer-events: none;
        }
    </style>
@endsection
