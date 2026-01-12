{{-- resources/views/partials/footer.blade.php --}}
<footer class="footer-custom pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            {{-- Brand & Description --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="brand-text mb-3">
                    <i class="bi bi-bag-fill me-2"></i>Toko Sepatu Keren
                </h5>
                <p class="footer-desc">
                    Toko online terpercaya dengan berbagai produk berkualitas.
                    Belanja mudah, aman, dan nyaman.
                </p>
                <div class="d-flex gap-3 mt-3">
                    <a href="https://www.instagram.com/haddputraa/" class="social-icon"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-heading mb-3">Menu</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('catalog.index') }}" class="footer-link">Katalog Produk</a>
                    </li>
                    <li class="mb-2"><a href="#" class="footer-link">Tentang Kami</a></li>
                    <li class="mb-2"><a href="#" class="footer-link">Kontak</a></li>
                </ul>
            </div>

            {{-- Help --}}
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-heading mb-3">Bantuan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="footer-link">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="footer-link">Cara Belanja</a></li>
                    <li class="mb-2"><a href="#" class="footer-link">Kebijakan Privasi</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-heading mb-3">Hubungi Kami</h6>
                <ul class="list-unstyled footer-contact">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2 text-gold"></i>Jl. Taman Kopo Indah 2, Bandung</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2 text-gold"></i>+62 812-8246-9055</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2 text-gold"></i>tokosepatukeren@tokoonline.com</li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0 footer-copy">
                    &copy; {{ date('Y') }} <span class="text-gold fw-bold">Toko Sepatu Keren</span>. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<style>
    /* Warna Dasar Hijau Gelap ke Hijau Emerald */
.footer-custom {
    background: linear-gradient(135deg, #062c1a 0%, #0d962f 100%);
    color: #e0e0e0;
    border-top: 4px solid #d4af37; /* Aksen garis emas di paling atas */
}

/* Efek Gradasi Emas pada Nama Brand */
.brand-text {
    font-weight: 800;
    background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: flex;
    align-items: center;
}

/* Heading Menu (Emas Solid) */
.footer-heading {
    color: #d4af37 !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
}

/* Link Menu */
.footer-link {
    color: #b0c4b1;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-link:hover {
    color: #fcf6ba; /* Warna emas terang saat di-hover */
    padding-left: 8px;
}

/* Deskripsi & Kontak */
.footer-desc, .footer-contact li {
    color: #cedad0;
    line-height: 1.6;
}

/* Ikon Sosial Media */
.social-icon {
    color: #d4af37;
    background: rgba(212, 175, 55, 0.1);
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 1px solid #d4af37;
    transition: 0.3s;
}

.social-icon:hover {
    background: #d4af37;
    color: #062c1a;
    transform: translateY(-3px);
}

/* Divider & Copyright */
.footer-divider {
    border-color: rgba(212, 175, 55, 0.3);
}

.footer-copy {
    color: #8da192;
}

.text-gold {
    color: #d4af37;
}
</style>