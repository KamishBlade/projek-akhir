@extends('layouts.main')

@section('title', 'Merchandise')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGS Official Merchandise Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Noto Sans JP', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- ========================================= --}}
    {{--                 NAVBAR ATAS               --}}
    {{-- ========================================= --}}
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-[1100px] mx-auto px-4">
            <div class="flex justify-between h-16">

                <div class="flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-gradient-to-br from-orange-400 to-green-400 rounded flex items-center justify-center text-white font-bold text-xs">
                            TGS
                        </div>
                        <span class="font-bold text-lg md:text-xl tracking-tight text-gray-900">
                            TOKYO GAME SHOW 2025
                        </span>
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button class="text-gray-500 hover:text-gray-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    {{--
        DATA DUMMY
    --}}
    @php
        $products = [
            [
                'name' => 'Main Visual T-Shirt Black',
                'price' => 4800,
                'image' => 'https://via.placeholder.com/400x400/1a1a1a/ffffff?text=Black+T-Shirt',
            ],
            [
                'name' => 'Main Visual T-Shirt White',
                'price' => 4800,
                'image' => 'https://via.placeholder.com/400x400/f3f3f3/333333?text=White+T-Shirt',
            ],
            [
                'name' => 'Acrylic Keychain <KV>',
                'price' => 800,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=Keychain',
            ],
            [
                'name' => 'Can Badge <KV>',
                'price' => 500,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=Badge',
            ],
            [
                'name' => 'TGS 2025 Towel',
                'price' => 2500,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=Towel',
            ],
            [
                'name' => 'TGS Mug Cup',
                'price' => 1500,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=Mug',
            ],
            [
                'name' => 'Clear File Set',
                'price' => 1000,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=File+Set',
            ],
            [
                'name' => 'Eco Bag',
                'price' => 1200,
                'image' => 'https://via.placeholder.com/400x400/ffffff/333333?text=Eco+Bag',
            ],
        ];
    @endphp

    {{-- KONTEN UTAMA --}}
    <div class="max-w-[1100px] mx-auto px-4 py-10">

        <h1 class="text-3xl font-bold text-center mb-8">TGS Official Merchandise Shop</h1>

        <div class="bg-gray-100 rounded-[20px] p-8 mb-12 shadow-sm border border-gray-200">
            <div class="text-sm text-gray-700 space-y-2 leading-relaxed">
                <p>
                    <span class="font-bold text-gray-900">Business Days:</span>
                    Central Mall 2F &lt;in front of Hall 5&gt;, Esplanade 2F &lt;in front of Hall 9&gt;
                </p>
                <p>
                    <span class="font-bold text-gray-900">Public Days:</span>
                    Central Mall 2F &lt;in front of Hall 5&gt;, Exhibition Hall 10 &lt;near the Merchandise Area&gt;
                </p>
                <p class="text-xs text-gray-500 pt-2">
                    ※In addition to cash, official goods can be purchased with various credit cards, electronic money (iD, QUICPay), and QR payments (PayPay, d-barai, au PAY, Merpay, WeChat Pay, Alipay+). Official goods are sold at the "TGS Official Goods Shop" located at the above areas.
                </p>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-3 md:gap-8 mt-8 font-bold text-gray-800 text-sm">
                <a href="#" class="flex items-center gap-1 hover:opacity-70 transition">
                    TGS Official Merchandise
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <span class="text-gray-300 hidden md:inline">/</span>
                <a href="#" class="flex items-center gap-1 hover:opacity-70 transition">
                    GameTGS Collaboration Merchandise
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                </a>
            </div>
        </div>

        <div class="bg-gradient-to-r from-[#FFAD47] via-[#FFD946] to-[#75D959] rounded-lg py-3 px-4 mb-8 text-center shadow-sm">
            <h2 class="text-xl md:text-2xl font-bold text-black/90 tracking-wide">TGS Official Merchandise</h2>
        </div>

        <div class="mb-12 text-sm text-gray-800 leading-7 space-y-5">
            <div>
                <p class="font-bold">Tokyo Game Show 2025 Official Goods Available Exclusively at the Venue!</p>
                <p>~ Featuring designs by popular illustrator Zashikiwarashi and more, with over 60 items in total ~</p>
            </div>

            <p>
                The official goods of Tokyo Game Show 2025 will once again be available exclusively at the venue this year.
                We will offer more than 60 items, including products featuring the main visual illustrated by the popular illustrator Zashikiwarashi, as well as original designs produced by the artist collective ANIMAREAL.
            </p>
            <p>
                In addition to a wide range of items such as T-shirts, towels, keychains, acrylic stands, and eco bags, this year’s lineup also includes new products themed around “Japanese style.” These items are not only perfect as souvenirs but also highly practical for everyday use.
            </p>
            <p>
                During the exhibition, make sure to pick up and check out these items, which can only be obtained at the venue.
            </p>

            <div class="text-xs text-gray-400 space-y-1 pt-2">
                <p>※Prices include tax.</p>
                <p>※The design and specifications of the actual product may differ slightly from those shown.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
            @foreach($products as $product)
            <div class="flex flex-col group cursor-pointer">
                <div class="border border-gray-200 rounded-3xl overflow-hidden bg-white hover:shadow-xl transition-all duration-300 ease-in-out mb-4 relative">
                    <div class="aspect-[4/3] md:aspect-square p-6 flex items-center justify-center">
                        <img src="{{ $product['image'] }}"
                             alt="{{ $product['name'] }}"
                             class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                    </div>
                </div>

                <div class="px-1">
                    <h3 class="font-bold text-gray-900 text-[15px] leading-tight mb-1">
                        {{ $product['name'] }}
                    </h3>
                    <p class="text-gray-500 text-sm font-medium">
                        ¥{{ number_format($product['price']) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</body>
</html>
@endsection
