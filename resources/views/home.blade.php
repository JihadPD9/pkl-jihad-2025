@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
{{-- ================= HERO ================= --}}
<section class="hero-sepatu text-white py-5">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">
                    Toko Sepatu Keren
                </h1>
                <p class="lead mb-4">
                    Cocok untuk gaya kasual, Trend Streetwear, atau Fashion Statement 🔥👇
                </p>
                <a href="{{ route('catalog.index') }}" class="btn btn-light btn-lg text-success">
                    <i class="bi bi-bag me-2"></i>Mulai  Belanja
                </a>
            </div>

            <div class="col-lg-6 d-none d-lg-block text-center">
                <img src="{{ asset('images/shoes.png') }}"
                     class="img-fluid"
                     style="max-height: 380px;">
            </div>
        </div>
    </div>
</section>

{{-- ================= KATEGORI ================= --}}
<section class="py-5 section-kategori">
    <div class="container text-center">
        <h2 class="section-title mb-5">Kategori Sepatu</h2>

        <div class="row g-4 justify-content-center">
            @foreach($categories as $category)
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="{{ route('catalog.index', ['category' => $category->slug]) }}"
                       class="text-decoration-none text-dark">
                        <div class="card category-card h-100">
                            <div class="card-body">
                                <img src="{{ $category->image_url }}"
                                     class="rounded-circle mb-3"
                                     width="80" height="80">
                                <h6 class="fw-semibold mb-1">{{ $category->name }}</h6>
                                <small class="text-muted">{{ $category->products_count }} produk</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= PRODUK UNGGULAN ================= --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <h2 class="fw-bold">Produk Favorit</h2>
            <a href="{{ route('catalog.index') }}" class="btn btn-outline-primary">
                Lihat Semua
            </a>
        </div>

        <div class="row g-4">
            @foreach($featuredProducts as $product)
                <div class="col-6 col-md-4 col-lg-3">
                    @include('partials.product-card', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- ================= PROMO ================= --}}
<section id="promo" class="promo-section py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-12">
                <div class="promo-card promo-sale text-center">
                    <div class="promo-content">
                        <span class="promo-badge">🔥 Flash Sale</span>
                        <h3>Diskon Besar Hari Ini</h3>
                        <p>Potongan hingga <strong>50%</strong> produk pilihan.</p>
                        <a href="{{ route('catalog.index', ['on_sale' => 1]) }}"
                            class="btn btn-light fw-semibold">
                        Lihat Promo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ================= PRODUK TERBARU ================= --}}
<section class="py-5 section-kategori">
    <div class="container">
        <h2 class="text-center section-title mb-4">Produk Terbaru</h2>

        <div class="row g-4">
            @foreach($latestProducts as $product)
                <div class="col-6 col-md-4 col-lg-3">
                    @include('partials.product-card', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

<style>
    /* ================= PROMO ================= */
.promo-section {
    background: linear-gradient(
        180deg,
        #eaf2ff 0%,
        #f5f9ff 60%,
        var(--blue-bg) 100%
    );
    position: relative;
}


.promo-card {
    height: 100%;
    border-radius: 10px;
    padding: 2.5rem;
    color: #fff;
    position: relative;
    overflow: hidden;
    transition: .4s ease;
    box-shadow: 0 15px 40px rgba(13,110,253,.25);
}

.promo-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(255,255,255,.25), transparent 60%);
}

.promo-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 25px 60px rgba(13,110,253,.45);
}

/* Flash Sale */
.promo-sale {
    background: linear-gradient(135deg,  #166534, #16a34a, #4ade80);
}

/* Member */
.promo-member {
    background: linear-gradient(135deg, #166534, #16a34a, #4ade80);
}

/* Content */
.promo-content {
    position: relative;
    z-index: 2;
}

.promo-content h3 {
    font-weight: 800;
    margin-bottom: .5rem;
}

.promo-content p {
    opacity: .95;
    margin-bottom: 1.5rem;
}

/* Badge */
.promo-badge {
    display: inline-block;
    background: #fff;
    color: #0d6efd;
    font-weight: 700;
    padding: .35rem .9rem;
    border-radius: 999px;
    margin-bottom: 1rem;
}

html, body {
    background: #0d6efd; /* sama dengan navbar */
    margin: 0;
    padding: 0;
}

:root {
    --blue-strong: #0a58ca;
    --blue-main: #0d6efd;
    --blue-glow: #3b82f6;
    --blue-soft: #dbeafe;
    --blue-bg: #eaf2ff;
}
html, body {
    background: #16a34a; /* selaras dengan navbar */
    margin: 0;
    padding: 0;
}

:root {
    --green-strong: #166534;
    --green-main: #16a34a;
    --green-glow: #4ade80;
    --green-soft: #dcfce7;
    --green-bg: #f0fdf4;
    --text-dark: #1f2937;
}

/* ================= HERO ================= */
.hero-sepatu {
    background: linear-gradient(135deg, #166534, #1fb656, #e5ff00);
    position: relative;
    overflow: hidden;
    background: url('/images/unnamed.jpg') center / cover no-repeat;
}

.hero-sepatu::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(9, 110, 0, 0.85),
        rgba(9, 110, 0, 0.85),
        rgba(187, 255, 0, 0.85)
    );
    z-index: 1;
}

.hero-sepatu::after {
    content: '';
    position: absolute;
    bottom: -70px;
    left: 0;
    width: 100%;
    height: 140px;
    background: var(--blue-bg);
    border-radius: 100% 100% 0 0;
    z-index: 2;
}

.hero-sepatu .container {
    position: relative;
    z-index: 3;
}

.hero-sepatu img {
    max-height: 380px;
    animation: floatHero 2s ease-in-out infinite;
    filter: drop-shadow(0 20px 35px rgba(0,0,0,.25));
}

@keyframes floatHero {
    0%   { transform: translateY(0); }
    50%  { transform: translateY(-20px); }
    100% { transform: translateY(0); }
}


/* ================= SECTION TITLE ================= */
.section-title {
    font-weight: 800;
    color: var(--green-strong);
}

.section-title::after {
    content: '';
    display: block;
    width: 70%;
    height: 5px;
    background: linear-gradient(to right, #166534, #4ade80);
    margin: 10px auto 0;
    border-radius: 20px;
}

/* ================= KATEGORI ================= */
.section-kategori {
    background: var(--green-bg);
}

.category-card {
    border: none;
    border-radius: 1.75rem;
    background: linear-gradient(160deg, #dcfce7, #ffffff);
    transition: .35s ease;
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 18px 40px rgba(22,163,74,.35);
}

.category-card img {
    background: #fff;
    padding: 10px;
    border: 3px solid var(--green-main);
}

/* ================= PRODUK ================= */
.product-card {
    border-radius: 1.75rem;
    background: linear-gradient(180deg, #ffffff, #f0fdf4);
    transition: .35s ease;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(22,163,74,.35);
}

/* ================= SECTION BG ================= */
.bg-light {
    background: var(--green-bg) !important;
}

/* ================= BUTTON ================= */
.btn-primary {
    background: linear-gradient(to right, #166534, #16a34a);
    border: none;
}

.btn-outline-primary {
    border: 2px solid var(--green-main);
    color: var(--green-main);
    font-weight: 600;
}

.btn-outline-primary:hover {
    background: var(--green-main);
    color: #fff;
}
</style>