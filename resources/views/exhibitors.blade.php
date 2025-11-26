@extends('layouts.main')

@section('title', 'Exhibitors')

@section('content')
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    /* Header */
    .breadcrumb {
        padding: 15px 25px;
        background: #e3ffcf;
        font-size: 14px;
        color: #333;
    }

    /* Title section */
    .title-box {
        background: linear-gradient(to right, #defcc9, #f7e6ff);
        padding: 40px 0;
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    /* Category Cards */
    .category-wrapper {
        display: flex;
        justify-content: center;
        gap: 25px;
        padding: 40px 0;
        flex-wrap: wrap;
    }

    .category-card {
        width: 260px;
        height: 150px;
        border-radius: 25px;
        padding: 20px;
        color: white;
        font-size: 17px;
        font-weight: bold;
        position: relative;
        display: flex;
        align-items: flex-start;
    }

    .category-card span {
        background: black;
        padding: 6px 12px;
        border-radius: 12px;
    }

    /* Gradient colors */
    .c1 { background: linear-gradient(135deg, #1fc4aa, #89ffd4); }
    .c2 { background: linear-gradient(135deg, #3aa6ff, #ffa34d); }
    .c3 { background: linear-gradient(135deg, #ffe766, #ffa45e); }
    .c4 { background: linear-gradient(135deg, #78ff56, #a3cf00); }
    .c5 { background: linear-gradient(135deg, #9e7bff, #ffb0d5); }
    .c6 { background: linear-gradient(135deg, #ff7c33, #ffb86c); }

    /* Arrow button */
    .arrow-btn {
        position: absolute;
        right: 15px;
        top: 15px;
        background: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: black;
        cursor: pointer;
    }

    /* Hiragana filter buttons */
    .filter-wrapper {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    .filter-btn {
        background: black;
        color: white;
        padding: 12px 20px;
        border-radius: 30px;
        font-size: 20px;
        cursor: pointer;
    }

    /* ABC filter */
    .alphabet-wrapper {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin: 30px 0;
        flex-wrap: wrap;
    }

    .alphabet-btn {
        background: black;
        color: white;
        padding: 15px 35px;
        border-radius: 30px;
        font-size: 18px;
        cursor: pointer;
    }

    .pdf-btn {
        margin: 20px auto;
        display: flex;
        justify-content: center;
    }

    .pdf-btn button {
        padding: 15px 35px;
        font-size: 18px;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        background: black;
        color: white;
    }
</style>
</head>
<body>

<div class="breadcrumb">
    Beranda / Pameran
</div>

<div class="title-box">
    Kategori / Urutkan Daftar
</div>

<div class="category-wrapper">
    <div class="category-card c1">
        <span>Area Pameran Umum</span>
        <div class="arrow-btn">◀</div>
    </div>

    <div class="category-card c2">
        <span>Proyek Penyelenggara</span>
    </div>

    <div class="category-card c3">
        <span>Area Game Ponsel Pintar</span>
    </div>

    <div class="category-card c4">
        <span>Area Perangkat Keras Gaming</span>
    </div>

    <div class="category-card c5">
        <span>Area Gaya Hidup Gaming</span>
        <div class="arrow-btn">▶</div>
    </div>

    <div class="category-card c6">
        <span>Area AR / VR</span>
    </div>
</div>

<div class="filter-wrapper">
    <div class="filter-btn">あ/A</div>
    <div class="filter-btn">か/Ka</div>
    <div class="filter-btn">さ/Sa</div>
    <div class="filter-btn">た/Ta</div>
    <div class="filter-btn">な/Na</div>
    <div class="filter-btn">は/Ha</div>
    <div class="filter-btn">ま/Ma</div>
    <div class="filter-btn">や/Ya</div>
    <div class="filter-btn">ら/Ra</div>
    <div class="filter-btn">わ/Wa</div>
</div>

<div class="alphabet-wrapper">
    <div class="alphabet-btn">A - D</div>
    <div class="alphabet-btn">E - H</div>
    <div class="alphabet-btn">I - L</div>
    <div class="alphabet-btn">M - P</div>
    <div class="alphabet-btn">Q - T</div>
    <div class="alphabet-btn">U - Z Lainnya</div>
</div>

<div class="pdf-btn">
    <button>PDF</button>
</div>
@endsection
