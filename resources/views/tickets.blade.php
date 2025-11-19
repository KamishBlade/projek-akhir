{{-- resources/views/overview.blade.php --}}

@extends('layouts.main')

@section('title', 'Tickets')

@section('content')

<div class="ticket-page-container">

    {{-- 1. Navigasi Tab --}}
    <nav class="ticket-nav-tabs">
        <a href="#" class="nav-tab">9.25-26 Business day</a>
        <a href="#" class="nav-tab active">9.27-28 Public Day</a>
        <a href="#" class="nav-tab">Travel Agency</a>
    </nav>

    {{-- 2. Kotak Pemberitahuan --}}
    <div class="ticket-notice-box">
        <h3>Notices of Ticket Purchase</h3>
        <p>Public Day and Business Day have different purchase methods. Please check and proceed with your purchase.</p>
        <div class="notice-links">
            <a href="#">Ticket types</a>
            <a href="#">Ticket Purchase Sites</a>
            <a href="#">For overseas</a>
            <a href="#">Notices</a>
        </div>
    </div>

    {{-- 3. Gambar Banner (Opsional, bisa dihapus) --}}
     <img src="{{ asset('images/tgs-ticket-banner.jpg') }}" class="w-full h-[500px] object-cover"
         onerror="this.src='https://placehold.co/1200x500/333/FFF?text=Tokyo+Game+Show+2025'">

    {{-- 4. Header "Ticket types" --}}
    <div class="ticket-type-header">
        <h2>Ticket types</h2>
    </div>

    {{-- 5. Grid Daftar Tiket --}}
    <div class="ticket-grid">

        {{-- Tiket 1: 1-day admission --}}
        <div class="ticket-item">
            <h3>1-day admission tickets (junior high school students and older only)</h3>
            <hr>
            <div class="ticket-price">
                <span>3,000 yen</span>
                <small>(tax included) for each day</small>
            </div>
            <p>Tickets will go on sale from: July 12 (Sat) 12:00pm</p>
            <ul class="ticket-notes">
                <li>※ Free admission for elementary school students and younger.</li>
                <li>※ Sales will end as soon as the planned number of tickets is reached.</li>
            </ul>
        </div>

        {{-- Tiket 2: Fast Tickets --}}
        <div class="ticket-item">
            <h3>Fast Tickets</h3>
            <hr>
            <div class="ticket-price">
                <span>6,000 yen</span>
                <small>(tax included) for each day</small>
            </div>
            <p>Lottery Period: July 12 (Sat) 12:00 - July 21 (Mon) 23:59</p>
            <ul class="ticket-notes">
                <li>※ Lottery sales only.</li>
                <li>※ After the initial sales period ends, additional tickets may be made available on a first-come, first-served basis for customers who were not selected in the lottery. Please check the ticketing website for further details.</li>
                <li>※ With a special item (the design is different on September 27th and 28th".</li>
                <li>※ Reservations are limited to 2 tickets per person for each admission day (one application for each day, maximum 2 tickets can be reserved for each day).</li>
            </ul>
        </div>
    </div>

    {{-- 6. Header Special Tickets --}}
    <h2 class="special-tickets-header">Special Tickets</h2>
    <div class="ticket-item">
        <h3>Special Tickets</h3>
        <hr>
        <div class="ticket-price">
            <span>1,500 yen</span>
            <small>(tax included)</small>
        </div>
        <p>Tickets will go on sale from Agt. 8 (Fri) 1:00pm</p>
        <ul class="ticket-notes">
            <li>※ Tickets are available only through advance sales on Ticket Pia. There will be no tickets sold on the day of the event, so please make sure to purchase them in advance.</li>
            <li>※ On the day of the planned event, please bring your issued Special Ticket and line up at the Special Ticket Counter (in front of the Central Entrance).</li>
            <li>※ On the day of the event, you must present (in original form) one of the following certificates. Those who present one of the following identification cards: Disability Certificate, War Injury Certificate, or A-Bomb Survivor's Health Certificate.</li>
        </ul>
    </div>

</div>


<style>
    .ticket-page-container {
        max-width: 1000px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
    }

    /* 1. Tombol Navigasi Atas */
    .ticket-nav-tabs {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }
    .ticket-nav-tabs .nav-tab {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.9rem;
        border: 1px solid #333;
        text-decoration: none;
    }
    .ticket-nav-tabs .nav-tab.active {
        background-color: #fff;
        color: #000;
        border-color: #000;
    }
    .ticket-nav-tabs .nav-tab:hover {
        opacity: 0.8;
        color: #fff;
    }
    .ticket-nav-tabs .nav-tab.active:hover {
        opacity: 1.0;
        color: #000;
    }

    /* 2. Kotak Pemberitahuan */
    .ticket-notice-box {
        background-color: #f5f5f5;
        border-radius: 8px;
        padding: 25px;
        text-align: center;
        margin-bottom: 30px;
    }
    .ticket-notice-box h3 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #000;
        margin-top: 0;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .ticket-notice-box h3::before {
        content: '';
        display: block;
        width: 4px;
        height: 1.2em;
        background-color: #555;
    }
    .ticket-notice-box p {
        color: #333;
        margin-bottom: 20px;
    }
    .notice-links {
        display: flex;
        justify-content: center;
        gap: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        flex-wrap: wrap;
    }
    .notice-links a {
        color: #000;
        text-decoration: underline;
    }

    /* 3. Gambar Tiket Besar */
    .large-ticket-image {
        width: 100%;
        max-width: 800px;
        display: block;
        margin: 40px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    /* 4. Header "Ticket types" */
    .ticket-type-header {
        background: linear-gradient(to right, #f7971e, #ffd200);
        border-radius: 6px;
        padding: 15px 25px;
        margin-bottom: 30px;
    }
    .ticket-type-header h2 {
        color: #000;
        font-size: 1.5rem;
        margin: 0;
        text-align: center;
        font-weight: 800;
    }

    /* 5. Grid Jenis Tiket */
    .ticket-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 50px;
    }
    .ticket-item {
        background-color: #fff;
    }
    .ticket-item h3 {
        font-size: 1.25rem;
        font-weight: bold;
        color: #000;
        border-left: 5px solid #f7c600;
        padding-left: 12px;
        line-height: 1.4;
    }
    .ticket-item hr {
        border: 0;
        border-top: 2px solid #eee;
        margin: 20px 0;
    }
    .ticket-price {
        margin-bottom: 15px;
    }
    .ticket-price span {
        font-size: 2rem;
        font-weight: 800;
        color: #000;
        margin-right: 10px;
    }
    .ticket-price small {
        font-size: 0.9rem;
        color: #333;
    }
    .ticket-item p {
        font-size: 0.95rem;
        color: #333;
        margin-bottom: 20px;
    }
    .ticket-notes {
        list-style-type: none;
        padding-left: 0;
        font-size: 0.85rem;
        color: #555;
        line-height: 1.7;
    }
    .ticket-notes li {
        text-indent: -1.4em;
        padding-left: 1.4em;
    }

    /* 6. Header Special Tickets */
    .special-tickets-header {
        font-size: 1.5rem;
        font-weight: bold;
        color: #000;
        margin-top: 50px;
        margin-bottom: 20px;
        border-left: 5px solid #f7c600;
        padding-left: 12px;
    }

    /* -- Media Query untuk Mobile -- */
    @media (max-width: 768px) {
        .ticket-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .ticket-page-container {
            padding: 15px;
        }
        .ticket-notice-box {
            padding: 20px;
        }
    }
</style>

@endsection
