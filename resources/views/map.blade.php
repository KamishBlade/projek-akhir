@extends('layouts.main')

@section('title', 'Map')

@section('content')

<style>
    /* ======================
       CATEGORY CARD (ATAS)
       ====================== */
    .map-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 20px;
        padding: 25px 10px;
    }

    .category-card {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        transition: 0.25s ease;
        cursor: pointer;
    }

    .category-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .full-link {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .category-card h3 {
        font-size: 1.2rem;
        font-weight: 600;
        margin: 0;
    }

    .c1 { border-left: 5px solid #ff4444; }
    .c2 { border-left: 5px solid #ff8800; }
    .c3 { border-left: 5px solid #0099ff; }
    .c4 { border-left: 5px solid #2ecc71; }
    .c5 { border-left: 5px solid #9b59b6; }



    /* ======================
       MAIN 2 COLUMN LAYOUT
       ====================== */
    .main-map-wrapper {
        display: flex;
        gap: 25px;
        margin-top: 30px;
        padding: 0 10px;
        align-items: flex-start;
    }

    /* LEFT SIDE — CARD LIST */
    .exhibitor-left {
        width: 60%;
    }

    .exhibitor-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .exhibitor-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: 0.25s ease;
    }

    .exhibitor-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    }

    .exhibitor-image img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        background: #ddd;
    }

    .exhibitor-body {
        padding: 18px;
    }

    .exhibitor-body h3 {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 700;
    }

    .exhibitor-body .sub {
        color: #444;
        margin: 4px 0 12px;
        font-size: 0.9rem;
    }

    .ex-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .hall {
        background: #eee;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .arrow {
        font-size: 1.5rem;
        font-weight: bold;
        padding-right: 4px;
    }


    /* RIGHT SIDE – MAP IMAGE */
    .map-right {
        width: 40%;
        background: #fff;
        padding: 18px;
        border-radius: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        position: sticky;
        top: 80px;
        height: fit-content;
    }

    .map-right img {
        width: 100%;
        border-radius: 10px;
    }

</style>




{{-- ============================
        CATEGORY SECTION
   ============================ --}}
<div class="map-container">

    <div class="category-card c1">
        <a href="{{ url('general') }}" class="full-link"><h3>General Exhibition Area</h3></a>
    </div>

    <div class="category-card c2">
        <a href="{{ url('organizer') }}" class="full-link"><h3>Organizer's Projects</h3></a>
    </div>

    <div class="category-card c3">
        <a href="{{ url('smartphone') }}" class="full-link"><h3>Smartphone Game Area</h3></a>
    </div>

    <div class="category-card c4">
        <a href="{{ url('hardware') }}" class="full-link"><h3>Gaming Hardware Area</h3></a>
    </div>

    <div class="category-card c5">
        <a href="{{ url('lifestyle') }}" class="full-link"><h3>Gaming Lifestyle Area</h3></a>
    </div>

</div>




{{-- ============================
        MAIN 2 COLUMN SECTION
   ============================ --}}
<div class="main-map-wrapper">

    {{-- ========== LEFT: CARD LIST ========== --}}
    <div class="exhibitor-left">

        <div class="exhibitor-container">

            <div class="exhibitor-card">
                <div class="exhibitor-image">
                    <img src="/images/sample1.png" alt="">
                </div>
                <div class="exhibitor-body">
                    <h3>+1F</h3>
                    <p class="sub">Merchandise Sales Area</p>
                    <div class="ex-info">
                        <span class="hall">📍 Hall 10</span>
                        <span class="arrow">➜</span>
                    </div>
                </div>
            </div>

            <div class="exhibitor-card">
                <div class="exhibitor-image">
                    <img src="/images/sample2.png" alt="">
                </div>
                <div class="exhibitor-body">
                    <h3>11 bit studios</h3>
                    <p class="sub">Indie Game Area</p>
                    <div class="ex-info">
                        <span class="hall">📍 Hall 11</span>
                        <span class="arrow">➜</span>
                    </div>
                </div>
            </div>

            <div class="exhibitor-card">
                <div class="exhibitor-image">
                    <img src="/images/sample3.png" alt="">
                </div>
                <div class="exhibitor-body">
                    <h3>1C Game Studios</h3>
                    <p class="sub">General Exhibition Area</p>
                    <div class="ex-info">
                        <span class="hall">📍 Hall 1</span>
                        <span class="arrow">➜</span>
                    </div>
                </div>
            </div>

        </div>
    </div>




    {{-- ========== RIGHT: VENUE MAP ========== --}}
    <div class="map-right">
        <h3 style="margin-bottom: 10px; font-weight: 700;">Venue Map</h3>

        {{-- gunakan gambar venue map kamu --}}
        <img src="/mnt/data/a35309cc-3fcc-45a6-9ade-4278b880b044.png" alt="Venue Map">
    </div>

</div>

@endsection
