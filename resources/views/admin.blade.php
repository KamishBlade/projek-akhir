@extends('layouts.main')

@section('title', 'Admin Dashboard - Manage Merchandise')

@section('content')

<div class="min-h-screen bg-gray-100 flex">

    {{-- === SIDEBAR ADMIN (Kiri) === --}}
    <aside class="w-64 bg-gray-900 text-white hidden md:flex flex-col shadow-2xl">
        <div class="p-6 text-center border-b border-gray-700">
            <h2 class="text-2xl font-extrabold text-yellow-400 tracking-wider">TGS ADMIN</h2>
            <p class="text-xs text-gray-400 mt-1">Control Panel</p>
        </div>

        <nav class="flex-1 p-4 space-y-2">
            {{-- Menu Berita (Sekarang Inaktif) --}}
            <a href="{{ route('admin') }}" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition">
                <span class="mr-3">📰</span> Kelola Berita
            </a>

            {{-- Menu Merchandise (AKTIF) --}}
            <a href="#" class="flex items-center px-4 py-3 bg-yellow-500 text-gray-900 rounded-lg font-bold shadow-md">
                <span class="mr-3">🛍️</span> Merchandise
            </a>

            <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition">
                <span class="mr-3">🎟️</span> Kelola Tiket
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition">
                <span class="mr-3">🏢</span> Exhibitors
            </a>
            <a href="#" class="flex items-center px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition">
                <span class="mr-3">⚙️</span> Pengaturan
            </a>
        </nav>

        <div class="p-4 border-t border-gray-700">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg transition font-semibold text-sm">
                    Log Out
                </button>
            </form>
        </div>
    </aside>

    {{-- === MAIN CONTENT (Kanan) === --}}
    <main class="flex-1 p-6 md:p-10">

        {{-- Header Dashboard --}}
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Manajemen Merchandise</h1>
                <p class="text-gray-500 text-sm mt-1">Kelola stok produk, harga, dan varian item.</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right hidden sm:block">
                    <p class="font-bold text-gray-700">Admin User</p>
                    <p class="text-xs text-green-600">Online</p>
                </div>
                <div class="h-10 w-10 rounded-full bg-yellow-400 flex items-center justify-center font-bold text-gray-800 shadow">
                    A
                </div>
            </div>
        </div>

        {{-- Kartu Statistik Produk --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-purple-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Total Produk</p>
                        <h3 class="text-2xl font-bold text-gray-800">142</h3>
                    </div>
                    <span class="text-3xl">📦</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-red-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Stok Menipis</p>
                        <h3 class="text-2xl font-bold text-gray-800">5</h3>
                    </div>
                    <span class="text-3xl">⚠️</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-green-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Terjual Bulan Ini</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,240</h3>
                    </div>
                    <span class="text-3xl">💰</span>
                </div>
            </div>
        </div>

        {{-- === ACTION BAR (Search & Add) === --}}
        <div class="bg-white p-4 rounded-xl shadow-sm mb-6 flex flex-col md:flex-row justify-between items-center gap-4">

            {{-- Form Pencarian --}}
            <form action="#" method="GET" class="w-full md:w-1/2 relative">
                <input type="text" name="search" placeholder="Cari nama produk / SKU..."
                       class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 transition"
                       value="{{ request('search') }}">
                <div class="absolute left-3 top-2.5 text-gray-400">
                    🔍
                </div>
            </form>

            {{-- Tombol Tambah --}}
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold shadow-md hover:shadow-lg transition flex items-center">
                <span class="text-xl mr-2">+</span> Tambah Produk
            </a>
        </div>

        {{-- === DATA TABLE MERCHANDISE === --}}
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 font-bold">Gambar</th>
                            <th class="py-3 px-6 font-bold">Nama Produk & SKU</th>
                            <th class="py-3 px-6 font-bold">Kategori</th>
                            <th class="py-3 px-6 font-bold text-right">Harga (IDR)</th>
                            <th class="py-3 px-6 font-bold text-center">Stok</th>
                            <th class="py-3 px-6 font-bold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">

                        {{-- Item 1: T-Shirt --}}
                        <tr class="border-b border-gray-200 hover:bg-yellow-50 transition">
                            <td class="py-3 px-6">
                                <div class="w-16 h-16 overflow-hidden rounded-lg shadow-sm bg-gray-100 border border-gray-200">
                                    <img src="https://placehold.co/150x150/222/FFF?text=T-Shirt" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <div class="flex flex-col">
                                    <span class="font-bold text-gray-800 text-base">TGS Official T-Shirt 2025</span>
                                    <span class="text-xs text-gray-500">SKU: TGS-TS-001</span>
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <span class="bg-blue-100 text-blue-800 py-1 px-3 rounded-full text-xs font-bold">Apparel</span>
                            </td>
                            <td class="py-3 px-6 text-right font-bold text-gray-800">
                                Rp 350.000
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="text-green-600 font-bold">120</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center space-x-3">
                                    <a href="#" class="w-8 h-8 rounded bg-yellow-100 text-yellow-600 flex items-center justify-center hover:bg-yellow-200 border border-yellow-200">✏️</a>
                                    <button class="w-8 h-8 rounded bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 border border-red-200">🗑️</button>
                                </div>
                            </td>
                        </tr>

                        {{-- Item 2: Gantungan Kunci (Stok Sedikit) --}}
                        <tr class="border-b border-gray-200 hover:bg-yellow-50 transition">
                            <td class="py-3 px-6">
                                <div class="w-16 h-16 overflow-hidden rounded-lg shadow-sm bg-gray-100 border border-gray-200">
                                    <img src="https://placehold.co/150x150/e67e22/FFF?text=Key" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <div class="flex flex-col">
                                    <span class="font-bold text-gray-800 text-base">Metal Keychain Logo</span>
                                    <span class="text-xs text-gray-500">SKU: TGS-KC-005</span>
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <span class="bg-gray-100 text-gray-600 py-1 px-3 rounded-full text-xs font-bold">Accessories</span>
                            </td>
                            <td class="py-3 px-6 text-right font-bold text-gray-800">
                                Rp 75.000
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="text-red-600 font-bold bg-red-100 px-2 py-1 rounded">5</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center space-x-3">
                                    <a href="#" class="w-8 h-8 rounded bg-yellow-100 text-yellow-600 flex items-center justify-center hover:bg-yellow-200 border border-yellow-200">✏️</a>
                                    <button class="w-8 h-8 rounded bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 border border-red-200">🗑️</button>
                                </div>
                            </td>
                        </tr>

                        {{-- Item 3: Plushie --}}
                        <tr class="border-b border-gray-200 hover:bg-yellow-50 transition">
                            <td class="py-3 px-6">
                                <div class="w-16 h-16 overflow-hidden rounded-lg shadow-sm bg-gray-100 border border-gray-200">
                                    <img src="https://placehold.co/150x150/9b59b6/FFF?text=Plush" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <div class="flex flex-col">
                                    <span class="font-bold text-gray-800 text-base">Mascot Plushie 30cm</span>
                                    <span class="text-xs text-gray-500">SKU: TGS-PL-020</span>
                                </div>
                            </td>
                            <td class="py-3 px-6">
                                <span class="bg-pink-100 text-pink-600 py-1 px-3 rounded-full text-xs font-bold">Toys</span>
                            </td>
                            <td class="py-3 px-6 text-right font-bold text-gray-800">
                                Rp 450.000
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="text-green-600 font-bold">42</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center space-x-3">
                                    <a href="#" class="w-8 h-8 rounded bg-yellow-100 text-yellow-600 flex items-center justify-center hover:bg-yellow-200 border border-yellow-200">✏️</a>
                                    <button class="w-8 h-8 rounded bg-red-100 text-red-600 flex items-center justify-center hover:bg-red-200 border border-red-200">🗑️</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <span class="text-xs text-gray-500">Menampilkan 1-3 dari 142 produk</span>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 rounded bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 text-sm">Prev</button>
                    <button class="px-3 py-1 rounded bg-yellow-400 border border-yellow-400 text-white font-bold text-sm shadow">1</button>
                    <button class="px-3 py-1 rounded bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 text-sm">2</button>
                    <button class="px-3 py-1 rounded bg-white border border-gray-300 text-gray-500 hover:bg-gray-100 text-sm">Next</button>
                </div>
            </div>
        </div>

    </main>
</div>

@endsection
