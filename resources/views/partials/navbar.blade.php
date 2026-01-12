{{-- ================================================
     FILE: resources/views/partials/navbar.blade.php
     FUNGSI: Navigation bar untuk customer
     ================================================ --}}

     <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
    <div class="container">
        {{-- Logo & Brand --}}
        <a class="navbar-brand text-primary" href="{{ route('home') }}">
            <img src="{{ asset('images/title.png') }}" alt="Logo Toko Sepatu Keren" width="200" height="200">
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar Content --}}
        <div class="navbar-collapse" id="navbarMain">
            {{-- Search Form --}}
            <form class="d-flex mx-auto" style="max-width: 400px; width: 100%;"
                  action="{{ route('catalog.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="q"
                           class="form-control"
                           placeholder="Cari produk..."
                           value="{{ request('q') }}">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            {{-- Right Menu --}}
            <ul class="navbar-nav ms-auto align-items-center">
                {{-- Katalog --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalog.index') }}">
                        <i class="bi bi-grid me-1"></i> Katalog
                    </a>
                </li>

                @auth
                    {{-- Wishlist --}}
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('wishlist.index') }}">
                            <i class="bi bi-heart"></i>
                            @if(auth()->user()->wishlists()->count() > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                                    {{ auth()->user()->wishlists()->count() }}
                                </span>
                            @endif
                        </a>
                    </li>

                    {{-- Cart --}}
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                            <i class="bi bi-cart3"></i>
                            @php
                                $cartCount = auth()->user()->cart?->items()->count() ?? 0;
                            @endphp
                            @if($cartCount > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary" style="font-size: 0.6rem;">
                                    {{ $cartCount }}
                                </span>
                            @endif
                        </a>
                    </li>

                    {{-- User Dropdown --}}
                    <li class="nav-item dropdown ms-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                           href="#" id="userDropdown"
                           data-bs-toggle="dropdown">
                            <img src="{{ auth()->user()->avatar_url }}"
                                 class="rounded-circle me-2"
                                 width="32" height="32"
                                 alt="{{ auth()->user()->name }}">
                            <span class="d-none d-lg-inline">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="bi bi-person me-2"></i> Profil Saya
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('orders.index') }}">
                                    <i class="bi bi-bag me-2"></i> Pesanan Saya
                                </a>
                            </li>
                            @if(auth()->user()->isAdmin())
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item text-primary" href="{{ route('admin.dashboard') }}">
                                        <i class="bi bi-speedometer2 me-2"></i> Admin Panel
                                    </a>
                                </li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- Guest Links --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success btn-sm ms-2" href="{{ route('register') }}">
                            Daftar
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<style>
    /* =====================================
   NAVBAR – GREEN LIGHT THEME
===================================== */
.navbar {
    background: linear-gradient(135deg, #177c3cff, #66a500) !important;
}

/* Brand */
.navbar-brand {
    color: #ffffff !important;
    font-weight: 700;
}

.navbar-brand i {
    color: #ecfdf5;
}

/* Nav links */
.navbar .nav-link {
    color: #ffffff !important;
    font-weight: 500;
    transition: all 0.3s ease;
}

.navbar .nav-link:hover {
    color: #ecfdf5 !important;
    transform: translateY(-1px);
}

/* Search */
.navbar .form-control {
    border-radius: 12px 0 0 12px;
    border: none;
}

.navbar .btn-outline-primary {
    border-radius: 0 12px 12px 0;
    border: none;
    background: #16a34a;
    color: #ffffff;
}

.navbar .btn-outline-primary:hover {
    background: #15803d;
}

/* Badge */
.navbar .badge {
    font-size: 0.6rem;
}

/* User avatar dropdown */
.navbar .dropdown-menu {
    border-radius: 14px;
    border: none;
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.navbar .dropdown-item:hover {
    background: #dcfce7;
}

/* =====================
   BUTTON DAFTAR
===================== */
.navbar .btn-success {
    background: linear-gradient(135deg, #15803d, #166534);
    border: none;
    color: #ffffff;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.navbar .btn-success:hover {
    background: linear-gradient(135deg, #166534, #14532d);
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(22,163,74,0.45);
}

/* Mobile toggler */
.navbar-toggler {
    border-color: rgba(255,255,255,0.7);
}

.navbar-toggler-icon {
    filter: brightness(0) invert(1);
}

</style>