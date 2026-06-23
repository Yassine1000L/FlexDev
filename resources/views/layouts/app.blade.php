<!DOCTYPE html>
<html lang="nl" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <title>@yield('title', 'Flex Dev | Developer')</title>

    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $css = $manifest['resources/css/app.css']['file'] ?? null;
        $js = $manifest['resources/js/app.js']['file'] ?? null;
        $host = request()->getHttpHost();
        $base = (!str_contains($host, '127.0.0.1') && !str_contains($host, 'localhost') && !str_contains($host, '.test')) ? 'https://' . $host : '';
    @endphp
    @if ($css)
        <link rel="stylesheet" href="{{ $base }}/build/{{ $css }}">
    @endif
    @if ($js)
        <script type="module" src="{{ $base }}/build/{{ $js }}"></script>
    @endif
</head>
<body class="bg-black text-white antialiased">
    <nav class="fixed top-0 left-0 right-0 z-50 px-4 md:px-8 py-6 flex items-center justify-between bg-neutral-800/80 backdrop-blur-xl border-b border-white/5">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-sm font-medium tracking-tight opacity-70 hover:opacity-100 transition-all hover:scale-[1.02]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-7 h-7 shrink-0">
                <rect width="32" height="32" rx="6" fill="#a3a3a3"/>
                <text x="16" y="22" text-anchor="middle" fill="black" font-family="system-ui" font-weight="700" font-size="18">F</text>
            </svg>
            <span class="hidden sm:inline">Flex Dev</span>
        </a>
        <div class="flex items-center gap-3 md:gap-8">
            @php $links = [['route' => 'diensten', 'label' => 'Diensten'], ['route' => 'hoe-ik-werk', 'label' => 'Werkwijze'], ['route' => 'projecten', 'label' => 'Projecten'], ['route' => 'contact', 'label' => 'Contact']]; @endphp
            @foreach ($links as $link)
                @php $active = request()->routeIs($link['route']); @endphp
                <a href="{{ route($link['route']) }}" class="relative text-xs md:text-sm font-semibold transition-all duration-200 {{ $active ? 'opacity-100' : 'opacity-60 hover:opacity-100' }}">
                    {{ $link['label'] }}
                    <span class="absolute -bottom-1 left-0 right-0 h-px bg-white transition-transform duration-200 {{ $active ? 'scale-x-100' : 'scale-x-0 hover:scale-x-100' }}"></span>
                </a>
            @endforeach
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-12 text-center">
        <p class="text-sm opacity-30">&copy; {{ date('Y') }} Flex Dev. Alle rechten voorbehouden.</p>
    </footer>

    <button id="backToTop" class="fixed bottom-8 right-8 z-50 w-10 h-10 rounded-full border border-white/20 bg-black/60 backdrop-blur-md flex items-center justify-center opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:border-white/40 hover:bg-black/80">
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
