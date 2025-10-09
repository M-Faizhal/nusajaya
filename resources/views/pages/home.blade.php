@extends('layouts.app')

@section('title', 'Nusajaya - Solusi Terpercaya untuk Land Clearing & Earthwork')
@section('description', 'Nusajaya menyediakan layanan profesional Penyiapan Lahan, Konstruksi, dan Sewa Alat Konstruksi dengan standar kualitas tinggi dan harga kompetitif.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4">
                        Solusi Terpercaya untuk
                        <span class="text-warning">Land Clearing</span> &
                        <span class="text-warning">Earthwork</span>
                    </h1>
                    <p class="lead mb-4">
                        Kami menyediakan layanan profesional dalam bidang penyiapan lahan, konstruksi, dan sewa alat konstruksi dengan standar kualitas tinggi dan tim berpengalaman.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('products') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-cogs me-2"></i>Lihat Layanan
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-image text-center">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                         alt="Excavator working on construction site"
                         class="img-fluid rounded-4 shadow-lg hero-main-image"
                         style="max-height: 500px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('images/nusajaya.jpeg') }}"
                             alt="Nusajaya Logo"
                             class="img-fluid rounded-4 shadow"
                             style="max-width: 350px; width: 100%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title text-center text-lg-start">
                        Tentang <span class="text-primary">Nusajaya</span>
                    </h2>
                    <p class="text-muted mb-4">
                        Nusajaya adalah perusahaan yang bergerak dalam bidang jasa konstruksi dengan spesialisasi pada penyiapan lahan, konstruksi, dan sewa alat konstruksi. Didirikan sejak 2021, kami telah menangani berbagai proyek mulai dari skala kecil hingga besar dengan dedikasi dan profesionalisme tinggi.
                    </p>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Kualitas Terjamin</h6>
                                    <small class="text-muted">Standar internasional</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Tepat Waktu</h6>
                                    <small class="text-muted">Sesuai timeline</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Tim Profesional</h6>
                                    <small class="text-muted">Berpengalaman</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-box bg-primary text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Harga Kompetitif</h6>
                                    <small class="text-muted">Value for money</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Layanan <span class="text-primary">Kami</span></h2>
            <p class="lead text-muted">Solusi lengkap untuk kebutuhan earthwork dan konstruksi Anda</p>
        </div>

        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card h-100 text-center">
                    <div class="service-icon">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-3">{{ $service['title'] }}</h5>
                    <p class="text-muted mb-4">{{ $service['description'] }}</p>
                    <a href="{{ route('products') }}" class="btn btn-outline-primary">
                        Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">
                    Mengapa Memilih <span class="text-primary">Nusajaya</span>?
                </h2>
                <div class="why-choose-content">
                    <div class="feature-item d-flex mb-4">
                        <div class="feature-icon bg-primary text-white rounded-circle me-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Bersertifikat & Legal</h5>
                            <p class="text-muted mb-0">Memiliki semua izin dan sertifikat yang diperlukan untuk operasional yang aman dan legal.</p>
                        </div>
                    </div>

                    <div class="feature-item d-flex mb-4">
                        <div class="feature-icon bg-primary text-white rounded-circle me-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Peralatan Modern</h5>
                            <p class="text-muted mb-0">Menggunakan excavator dan alat berat terbaru dengan teknologi canggih untuk hasil optimal.</p>
                        </div>
                    </div>

                    <div class="feature-item d-flex mb-4">
                        <div class="feature-icon bg-primary text-white rounded-circle me-4" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Ramah Lingkungan</h5>
                            <p class="text-muted mb-0">Menerapkan praktik kerja yang memperhatikan kelestarian lingkungan dan sustainability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stats-container">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="stat-card bg-primary text-white text-center p-4 rounded-4">
                                <h3 class="display-6 fw-bold mb-2">500+</h3>
                                <p class="mb-0">Proyek Selesai</p>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="stat-card bg-success text-white text-center p-4 rounded-4">
                                <h3 class="display-6 fw-bold mb-2">4+</h3>
                                <p class="mb-0">Tahun Pengalaman</p>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="stat-card bg-warning text-white text-center p-4 rounded-4">
                                <h3 class="display-6 fw-bold mb-2">50+</h3>
                                <p class="mb-0">Excavator</p>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="stat-card bg-primary text-white text-center p-4 rounded-4">
                                <h3 class="display-6 fw-bold mb-2">100%</h3>
                                <p class="mb-0">Kepuasan Klien</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h3 class="fw-bold mb-2">Siap Memulai Proyek Anda?</h3>
                <p class="mb-0 lead">Dapatkan konsultasi gratis dan penawaran terbaik untuk kebutuhan land clearing dan earthwork Anda.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Hubungi Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Counter animation for stats
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50; // Animation duration control
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current) + (target >= 100 ? '+' : '');
        }, 40);
    }

    // Initialize counter animation when stats section is visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.display-6');
                counters.forEach(counter => {
                    const target = parseInt(counter.textContent.replace(/\D/g, ''));
                    animateCounter(counter, target);
                });
                observer.unobserve(entry.target);
            }
        });
    });

    const statsContainer = document.querySelector('.stats-container');
    if (statsContainer) {
        observer.observe(statsContainer);
    }
</script>
@endsection
