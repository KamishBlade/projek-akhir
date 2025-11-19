{{-- resources/views/layouts/main.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TGS 2025')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    {{-- ================================================================== --}}
    {{-- ========= HEADER GLOBAL (PUTIH - DESKTOP ONLY) ========= --}}
    {{-- ================================================================== --}}
    <header class="w-full bg-white shadow-sm">

        {{-- BAGIAN 1: Header Atas (Logo, Social Media, Bahasa) --}}
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">

                {{-- Kiri: Logo & Tanggal (Tombol Home) --}}
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/tgs-logo.png') }}" class="h-10 md:h-12 object-contain" alt="TGS Logo">
                    <div>
                        <p class="text-sm font-semibold">2025.09.25 THU - 09.28 SUN</p>
                        <p class="text-xs text-gray-600 -mt-1">MAKUHARI MESSE</p>
                    </div>
                </a>

                {{-- Kanan: Link Atas & Bahasa --}}
                <div class="flex items-center gap-4">
                    {{-- Link Teks (Akan selalu terlihat) --}}
                    <nav class="flex items-center gap-4 text-xs font-medium text-gray-700">

                        {{-- === PERUBAHAN ADA DI SINI: Link Official Social Media === --}}
                        <a href="{{ route('social') }}"
                           class="hover:text-blue-600 {{ request()->routeIs('social') ? 'text-blue-600 font-bold' : '' }}">
                           Official Social Media
                        </a> /

                        <a href="#" class="hover:text-blue-600">News</a> /
                        <a href="#" class="hover:text-blue-600">For Business</a> /
                        <a href="#" class="hover:text-blue-600">For Overseas</a> /
                        <a href="#" class="hover:text-blue-600">Press</a>
                    </nav>

                    {{-- Tombol Bahasa (Akan selalu terlihat) --}}
                    <select class="border-gray-300 rounded-full text-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                        <option>🌐 English</option>
                        <option>🎌 Japanese</option>
                    </select>
                </div>
            </div>
        </div>

       {{-- BAGIAN 2: Navigasi Utama (Overview, Tickets, dll) --}}
        <div class="w-full bg-gray-50 border-t border-b border-gray-200">
            <nav class="max-w-7xl mx-auto px-6 flex justify-end gap-6 py-3 text-sm font-medium text-gray-700">

                {{-- Link Overview --}}
                <a href="{{ route('overview') }}"
                   class="hover:text-blue-600 {{ request()->routeIs('overview') ? 'text-blue-600 font-bold' : '' }}">
                    Overview
                </a>

                {{-- Link Tickets --}}
                <a href="{{ route('tickets') }}"
                   class="hover:text-blue-600 {{ request()->routeIs('tickets') ? 'text-blue-600 font-bold' : '' }}">
                    Tickets
                </a>

                {{-- Link Event Stage --}}
                <a href="{{ route('event') }}"
                   class="hover:text-blue-600 {{ request()->routeIs('event') ? 'text-blue-600 font-bold' : '' }}">
                    Event Stage
                </a>

                {{-- Link Lainnya --}}
                
                <a href="{{ route('map') }}"
                   class="hover:text-blue-600 {{ request()->routeIs('map') ? 'text-blue-600 font-bold' : '' }}">
                    Map
                </a>

                <a href="{{ route('exhibitors') }}"
                   class="hover:text-blue-600 {{ request()->routeIs('exhibitors') ? 'text-blue-600 font-bold' : '' }}">
                    Exhibitors
                </a>
                <a href="#" class="hover:text-blue-600">Merchandise</a>
            </nav>
        </div>


        {{-- BAGIAN 3: Breadcrumb (Gradient) --}}
        {{-- Ini akan HILANG di Home, tapi MUNCUL di halaman lain --}}
        @if (!request()->is('/'))
            <section class="w-full bg-gradient-to-r from-green-50 via-blue-50 to-orange-50 shadow-sm">
                <div class="max-w-7xl mx-auto px-6 py-3">
                    <nav class="text-sm font-medium" aria-label="Breadcrumb">
                        <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900">
                            Home
                        </a>
                        <span class="mx-2 text-gray-500">&gt;</span>
                        <span class="text-gray-900 font-semibold">
                            @yield('title')
                        </span>
                    </nav>
                </div>
            </section>
        @endif
    </header>
    {{-- ====================================================== --}}
    {{-- ============ AKHIR DARI HEADER GLOBAL ============ --}}
    {{-- ====================================================== --}}


    {{-- KONTEN UTAMA HALAMAN AKAN MUNCUL DI SINI --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
