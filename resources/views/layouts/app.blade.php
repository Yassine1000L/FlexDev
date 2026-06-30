<!DOCTYPE html>
<html lang="nl" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <title>@yield('title', __('Flex Dev | Developer'))</title>

    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $css = $manifest['resources/css/app.css']['file'] ?? null;
        $js = $manifest['resources/js/app.js']['file'] ?? null;
        $host = request()->getHttpHost();
        $base = (!str_contains($host, '127.0.0.1') && !str_contains($host, 'localhost') && !str_contains($host, '.test')) ? 'https://' . $host : '';
        $locale = request()->cookie('locale', 'nl');
        if (in_array($locale, ['en', 'nl', 'fr'])) {
            app()->setLocale($locale);
        }
    @endphp
    @if ($css)
        <link rel="stylesheet" href="{{ $base }}/build/{{ $css }}">
    @endif
    @if ($js)
        <script type="module" src="{{ $base }}/build/{{ $js }}"></script>
    @endif
</head>
<body class="bg-slate-950 text-white antialiased">
    <nav class="fixed top-0 left-0 right-0 z-50 px-4 md:px-10 py-5 flex items-center justify-between bg-gradient-to-b from-slate-900/80 to-slate-900/40 backdrop-blur-2xl border-b border-white/5 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 shrink-0">
                    <defs>
                        <linearGradient id="logoGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#60a5fa"/>
                            <stop offset="100%" stop-color="#a78bfa"/>
                        </linearGradient>
                    </defs>
                    <rect width="32" height="32" rx="7" fill="url(#logoGrad)" opacity="0.9"/>
                    <text x="16" y="22" text-anchor="middle" fill="white" font-family="system-ui" font-weight="700" font-size="18">F</text>
                </svg>
                <div class="absolute -inset-1 bg-blue-400/20 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
            <span class="hidden sm:block text-sm font-semibold tracking-tight text-slate-100">Flex Dev</span>
        </a>

        
        <div class="flex items-center gap-1 md:gap-2">
            @php $links = [['route' => 'diensten', 'label' => __('Diensten')], ['route' => 'waarom', 'label' => __('Waarom')], ['route' => 'hoe-ik-werk', 'label' => __('Werkwijze')], ['route' => 'projecten', 'label' => __('Projecten')], ['route' => 'contact', 'label' => __('Contact')]]; @endphp
            @foreach ($links as $link)
                @php $active = request()->routeIs($link['route']); @endphp
                <a href="{{ route($link['route']) }}" class="relative px-3 md:px-4 py-2 text-xs md:text-sm font-medium rounded-lg transition-all duration-200 text-center {{ $active ? 'text-white bg-white/10' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                    {{ $link['label'] }}
                    @if ($active)
                        <span class="absolute bottom-0.5 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full bg-blue-400"></span>
                    @endif
                </a>
            @endforeach

        </div>
    </nav>

    @php $locale = request()->cookie('locale', 'nl'); $langs = ['nl' => 'NL', 'fr' => 'FR', 'en' => 'EN']; @endphp
    <div class="fixed top-[60px] right-2 md:top-[76px] md:right-10 z-50">
        <select onchange="window.location.href=this.value" class="appearance-none bg-slate-900/70 backdrop-blur-md border border-white/10 text-xs font-medium text-slate-300 px-3 py-1.5 rounded-full cursor-pointer hover:border-white/30 transition-colors outline-none">
            @foreach ($langs as $code => $label)
                <option value="{{ route('taal', $code) }}" class="bg-slate-900" {{ $locale === $code ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="py-12 text-center">
        <div class="flex items-center justify-center gap-3 mb-6 hidden">
            @php $locale = request()->cookie('locale', 'nl'); @endphp
            <a href="{{ route('taal', 'en') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'en' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">EN</a>
            <span class="text-[10px] text-slate-700">|</span>
            <a href="{{ route('taal', 'nl') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'nl' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">NL</a>
            <span class="text-[10px] text-slate-700">|</span>
            <a href="{{ route('taal', 'fr') }}" class="text-xs font-medium px-2 py-1 rounded transition-colors {{ $locale === 'fr' ? 'text-blue-400 bg-blue-500/10' : 'text-slate-500 hover:text-slate-300' }}">FR</a>
        </div>
        <p class="text-sm text-slate-500">&copy; {{ date('Y') }} Flex Dev. {{ __('Alle rechten voorbehouden.') }}</p>
    </footer>

    <button id="backToTop" class="fixed bottom-8 right-8 z-50 w-10 h-10 rounded-full border border-blue-500/30 bg-slate-950/60 backdrop-blur-md flex items-center justify-center opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:border-blue-400/60 hover:bg-blue-950/80">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    <script>
        const backBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backBtn.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                backBtn.classList.add('opacity-100', 'translate-y-0');
            } else {
                backBtn.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                backBtn.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    </script>
</body>
</html>
