<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Stage - TGS Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Font jika diperlukan */
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
        body { font-family: 'Noto Sans JP', sans-serif; }

        .tgs-gradient {
            background: linear-gradient(90deg, #6366f1 0%, #a855f7 50%, #06b6d4 100%);
        }
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(50, 50, 150, 0.8), rgba(50, 150, 200, 0.6)), url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    {{-- DATA DUMMY UNTUK SIMULASI (Biasanya ini dari Controller) --}}
    @php
        $schedule = [
            'September 25' => [
                [
                    'title' => 'Opening Ceremony',
                    'image' => 'https://via.placeholder.com/400x225/3b82f6/ffffff?text=Opening+Ceremony',
                    'time' => '9/25 10:00-10:30',
                    'tags' => ['Ceremony']
                ],
                [
                    'title' => 'Keynote Speech: Game Innovation',
                    'image' => 'https://via.placeholder.com/400x225/10b981/ffffff?text=Keynote',
                    'time' => '9/25 11:00-12:00',
                    'tags' => ['Keynote']
                ],
                [
                    'title' => 'AKIBA LOST: Special Stage',
                    'image' => 'https://via.placeholder.com/400x225/8b5cf6/ffffff?text=Akiba+Lost',
                    'time' => '9/25 13:00',
                    'tags' => ['Show']
                ],
                [
                    'title' => 'Annapurna Interactive New Release',
                    'image' => 'https://via.placeholder.com/400x225/f59e0b/ffffff?text=Annapurna',
                    'time' => '9/25 14:30',
                    'tags' => ['Release']
                ]
            ],
            'September 26' => [
                 [
                    'title' => 'Red Bull Apex Takeover with Yuki Tsunoda',
                    'image' => 'https://via.placeholder.com/400x225/ef4444/ffffff?text=Red+Bull+Apex',
                    'time' => '9/26 14:30',
                    'tags' => ['Esports']
                ]
            ],
             'September 27' => [
                 [
                    'title' => 'Top Game Creators Academy (TGCA)',
                    'image' => 'https://via.placeholder.com/400x225/06b6d4/ffffff?text=TGCA',
                    'time' => '9/27 11:00',
                    'tags' => ['Education']
                ],
                 [
                    'title' => 'Anniversary Title Producers Talk',
                    'image' => 'https://via.placeholder.com/400x225/ec4899/ffffff?text=Producers+Talk',
                    'time' => '9/27 13:15',
                    'tags' => ['Talk']
                ],
                 [
                    'title' => 'Red Bull 283 Academy',
                    'image' => 'https://via.placeholder.com/400x225/ef4444/ffffff?text=RB+Academy',
                    'time' => '9/27 14:45',
                    'tags' => ['Academy']
                ]
            ]
        ];
    @endphp

    {{-- NAVBAR HEADER (Sederhana) --}}
    <header class="bg-white border-b py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="font-bold text-2xl tracking-tighter">TGS <span class="text-xs font-normal block">TOKYO GAME SHOW</span></div>
            <nav class="hidden md:flex space-x-6 text-sm font-bold text-gray-600">
                <a href="#" class="hover:text-blue-600">Overview</a>
                <a href="#" class="hover:text-blue-600">Tickets</a>
                <a href="#" class="text-blue-600 border-b-2 border-blue-600">Event Stage</a>
                <a href="#" class="hover:text-blue-600">Official Program</a>
                <a href="#" class="hover:text-blue-600">Exhibitor List</a>
            </nav>
            <div class="md:hidden">Menu</div> {{-- Mobile placeholder --}}
        </div>
    </header>

    {{-- HERO SECTION --}}
    <section class="hero-bg relative h-64 flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-white text-4xl font-bold mb-6 drop-shadow-lg">Event Stage</h1>
        <div class="bg-black/80 text-white px-8 py-4 rounded-full max-w-2xl shadow-xl backdrop-blur-sm border border-gray-700">
            <p class="text-sm md:text-base font-semibold">
                The event stage includes keynote speeches, the Japan Game Awards ceremony, sponsor sessions, and Organizer's project.
            </p>
        </div>
    </section>

    {{-- MAIN CONTENT CONTAINER --}}
    <main class="container mx-auto px-4 py-12 -mt-8 relative z-10">

        {{-- INFO BOX (Gradient Border) --}}
        <div class="bg-gradient-to-r from-cyan-300 to-blue-500 p-1 rounded-3xl shadow-lg mb-16 mx-auto max-w-5xl">
            <div class="bg-white rounded-[20px] p-6 md:p-8 flex flex-col md:flex-row items-center gap-8">
                <div class="w-full md:w-1/3">
                    <img src="https://via.placeholder.com/400x250/000000/ffffff?text=Live+Stream" alt="Stage Preview" class="rounded-lg w-full object-cover shadow-md">
                </div>
                <div class="w-full md:w-2/3">
                    <p class="font-bold text-gray-800 mb-2">We have prepared a variety of programs for this year as well. Please wait for the official release of detailed information. The event stage will be accessible through online streaming.</p>
                    <div class="mt-4 text-right">
                        <button class="bg-black text-white text-xs font-bold py-2 px-6 rounded-full hover:bg-gray-800 transition">
                            2024 stream archive ↗
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- JADWAL PER HARI --}}
        <div class="max-w-6xl mx-auto space-y-12">
            @foreach($schedule as $date => $events)
                <div class="schedule-group">
                    {{-- Judul Tanggal dengan Garis Vertikal Biru --}}
                    <div class="flex items-center mb-6">
                        <div class="w-1 h-6 bg-cyan-500 mr-3"></div>
                        <h2 class="text-xl font-bold text-gray-800">{{ $date }} Event Stage</h2>
                    </div>

                    {{-- Grid Kartu Event --}}
                    <div class="relative">
                        {{-- Tombol Navigasi Kiri (Visual Only) --}}
                        <button class="absolute -left-12 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-2 shadow hover:bg-gray-50 hidden xl:block z-10">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            @foreach($events as $event)
                                <div class="bg-gray-100 rounded-lg overflow-hidden group hover:shadow-lg transition duration-300 cursor-pointer flex flex-col h-full">
                                    {{-- Gambar Thumbnail --}}
                                    <div class="relative overflow-hidden">
                                        <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-40 object-cover transform group-hover:scale-105 transition duration-500">
                                        {{-- Badge Kategori (Opsional) --}}
                                        <div class="absolute top-2 left-2">
                                            <span class="bg-black text-white text-[10px] font-bold px-2 py-1 rounded-sm">{{ $event['tags'][0] }}</span>
                                        </div>
                                    </div>

                                    {{-- Konten Kartu --}}
                                    <div class="p-4 flex flex-col flex-grow justify-between">
                                        <div>
                                            <h3 class="font-bold text-sm text-gray-900 mb-2 line-clamp-3">{{ $event['title'] }}</h3>
                                        </div>
                                        <div class="flex justify-between items-end mt-4">
                                            <span class="text-xs text-gray-500 font-mono">{{ $event['time'] }}</span>
                                            <div class="bg-black text-white rounded-full p-1 group-hover:bg-cyan-600 transition">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Tombol Navigasi Kanan (Visual Only) --}}
                        <button class="absolute -right-12 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-2 shadow hover:bg-gray-50 hidden xl:block z-10">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-20 text-center text-xs">
        <p>&copy; 2025 Event Organizer. All rights reserved.</p>
    </footer>

</body>
</html>
