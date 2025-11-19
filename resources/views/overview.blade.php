{{-- resources/views/overview.blade.php --}}

@extends('layouts.main')

@section('title', 'Overview')

@section('content')

<div class="max-w-7xl mx-auto py-12 px-6">

    {{-- ================================================= --}}
    {{-- ========= BAGIAN BARU DARI SCREENSHOT 2 ========= --}}
    {{-- ================================================= --}}

    {{-- 1. Bagian Theme, Period, & What is TGS --}}
    <section class="mb-12 grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16">

        <div class="md:col-span-2">
            <p class="text-sm font-semibold text-orange-500">This year's theme</p>
            <h2 class="text-4xl font-extrabold text-gray-800 mt-1 mb-5">
                Unlimited, Neverending Playground
            </h2>
            <div class="space-y-4 text-gray-700">
                <p>
                    TGS is a place where games, creators and players from all over the world gather, and a playground where we can create the future of games together.
                </p>
                <p>
                    It is a world where people of all ages and nationalities, both adults and children, are able to visit and enjoy themselves, and where they can connect with each other and have experiences that they will never forget.
                </p>
            </div>
        </div>

        {{-- Kolom Kanan: Period & What is --}}
        <div class="md:col-span-1">
            <div class="mb-6">
                <h3 class="text-sm font-semibold text-gray-700">Period</h3>
                <p class="text-gray-800 font-medium">
                    9/25-28 Makuhari Messe<br>
                    Business Day: Sep. 25-26 10:00-17:00<br>
                    Public Day: Sep. 27 9:30-17:00 | Sep. 28 9:30-16:30
                </p>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-700">WHAT IS TOKYO GAME SHOW?</h3>
                <p class="text-gray-600 text-sm">
                    The Tokyo Game Show (TGS), first held in 1996 and celebrating its 29th anniversary this year, is one of the largest game events in the world.
                </p>
            </div>
        </div>
    </section>

    {{-- 2. Bagian Official Supporter --}}
    <section class="mb-12 bg-orange-500 rounded-2xl shadow-lg p-6 md:p-8 text-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

            {{-- Foto Supporter --}}
            <div class="md:col-span-1">
                {{-- GANTI NAMA FILE GAMBAR INI --}}
                <img src="{{ asset('images/kanata-hongo.jpg') }}" alt="Kanata Hongo" class="rounded-lg w-full h-auto object-cover shadow-md">
            </div>

            {{-- Info Supporter --}}
            <div class="md:col-span-2">
                <p class="text-sm font-semibold text-orange-100">TGS 2025 OFFICIAL SUPPORTER</p>
                <h3 class="text-3xl font-bold text-white mb-4">Kanata Hongo</h3>

                {{-- Box Profile --}}
                <div>
                    <span class="bg-orange-600 text-white font-semibold px-4 py-2 rounded-t-lg inline-block text-sm">
                        PROFILE
                    </span>
                    <div class="bg-white text-gray-700 p-5 rounded-b-lg rounded-tr-lg shadow-inner">
                        <p class="text-sm">
                            Actor Kanata Hongo has been selected as the Official Supporter for TGS2025. Hongo has appeared in numerous works based on games and anime and is known as an avid game enthusiast. With deep knowledge and passion for games, he enjoys playing across a wide range of titles and genres.
                        </p>
                        <div class="text-right mt-4">
                            <a href="#" class="inline-block bg-black text-white text-xs font-semibold px-5 py-2 rounded-full hover:bg-gray-800 transition">
                                MORE &gt;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Bar "Newly Renewed" (DIPINDAHKAN KE SINI) --}}
    <div class="bg-orange-500 text-white text-center font-semibold py-3 mb-10 rounded-lg">
        TGS has been newly renewed from this year!
    </div>


    {{-- ================================================= --}}
    {{-- ====== BAGIAN LAMA DARI SCREENSHOT 1 (SAMA) ====== --}}
    {{-- ================================================= --}}

    {{-- 4. Bagian VISUAL --}}
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            {{-- Gambar Visual --}}
            <div class="md:col-span-2">
                {{-- Ganti 'images/tgs-visual.jpg' dengan path gambar Anda --}}
                <img src="{{ asset('images/tgs-visual.jpg') }}" alt="TGS 2025 Visual" class="w-full h-auto object-cover rounded-lg shadow-lg">
            </div>
            {{-- Teks Visual --}}
            <div class="md:col-span-1">
                <h2 class="text-5xl font-extrabold text-gray-800 mb-4">VISUAL</h2>
                <p class="text-gray-600">
                    This year's main visual is created by illustrator Wataru Watanabe, who has garnered attention for his delicate and unique world view.
                </p>
                <span class="inline-block bg-black text-white text-xs font-semibold px-3 py-1 rounded-full mt-4">
                    Official Site
                </span>
            </div>
        </div>
    </section>

    {{-- 5. Bagian LOGO --}}
    <section class="mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            {{-- Gambar Logo --}}
            <div class="md:col-span-2">
                 {{-- Ganti 'images/tgs-logo.jpg' dengan path gambar Anda --}}
                <img src="{{ asset('images/tgs-logo.jpg') }}" alt="TGS 2025 Logo" class="w-full h-auto object-cover rounded-lg shadow-lg bg-gray-900 p-4">
            </div>
            {{-- Teks Logo --}}
            <div class="md:col-span-1">
                <h2 class="text-5xl font-extrabold text-gray-800 mb-4">LOGO</h2>
                <p class="text-gray-600">
                    The TGS logo has been redesigned. The stylish design symbolizes a new era of TGS, where evolving gaming scenes and the next-generation entertainment gather.
                </p>
            </div>
        </div>
    </section>

    {{-- 6. Bar "Overview" --}}
    <div class="bg-green-600 text-white text-center font-semibold py-3 mb-10 rounded-lg">
        Overview
    </div>

    {{-- 7. Tabel Overview --}}
    <section class="bg-white shadow-lg rounded-xl overflow-hidden mb-12">
        {{-- Kita gunakan <dl> (Definition List) untuk struktur key-value --}}
        <dl class="divide-y divide-gray-200">

            {{-- Row: Event Name --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Event Name</dt>
                <dd class="text-gray-900 md:col-span-3">TOKYO GAME SHOW 2025</dd>
            </div>

            {{-- Row: Venue --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Venue</dt>
                <dd class="text-gray-900 md:col-span-3">Makuhari Messe Hall 1-11 + International Conference Hall + Event Hall</dd>
            </div>

            {{-- Row: Period --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Period</dt>
                <dd class="text-gray-900 md:col-span-3">
                    <div class="space-y-2">
                        <p>
                            <strong class="text-gray-800">Business Day:</strong><br>
                            Sep. 25 (Thu.) 10:00-17:00<br>
                            Sep. 26 (Fri.) 10:00-17:00
                        </p>
                        <p>
                            <strong class="text-gray-800">Public Day:</strong><br>
                            Sep. 27 (Sat.) 9:30-17:00<br>
                            Sep. 28 (Sun.) 9:30-17:00
                        </p>
                    </div>
                    <p class="text-sm text-gray-500 mt-3">
                        *Opening times may be brought forward by 30 minutes depending on the situation.
                    </p>
                </dd>
            </div>

            {{-- Row: Organizer --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Organizer</dt>
                <dd class="text-gray-900 md:col-span-3">Computer Entertainment Supplier's Association (CESA)</dd>
            </div>

            {{-- Row: Co-Organizer --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Co-Organizer</dt>
                <dd class="text-gray-900 md:col-span-3">Nikkei Business Publications, Inc., Sony Music Solutions Inc.</dd>
            </div>

            {{-- Row: Supporter --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 items-baseline">
                <dt class="font-semibold text-gray-700 md:col-span-1">Supporter</dt>
                <dd class="text-gray-900 md:col-span-3">Ministry of Economy, Trade and Industry / Agency for Cultural Affairs</dd>
            </div>

        </dl>
    </section>

</div>

@endsection
