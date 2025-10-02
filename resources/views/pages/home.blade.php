@extends('layouts.app')

@section('title', 'Nusajaya - Solusi Terpercaya untuk Land Clearing & Earthwork')
@section('description', 'Nusajaya menyediakan layanan profesional Land Clearing, Penimbunan, Pengurukan, dan Persewaan Excavator dengan standar kualitas tinggi dan harga kompetitif.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-4">
                        Solusi Terpercaya untuk
                        <span class="text-warning">Land Clearing</span> &
                        <span class="text-warning">Earthwork</span>
                    </h1>
                    <p class="lead mb-4">
                        Kami menyediakan layanan profesional dalam bidang land clearing, penimbunan, pengurukan, dan persewaan excavator dengan standar kualitas tinggi dan tim berpengalaman.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('products') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-cogs"></i> Lihat Layanan
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image text-center">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="Excavator working on construction site" 
                         class="img-fluid rounded-4 shadow-lg hero-main-image"
                         style="max-height: 400px; object-fit: cover;">
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
                <div class="about-image">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                             alt="Construction site with heavy machinery" 
                             class="img-fluid rounded-4 shadow">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary rounded-4 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, rgba(52,152,219,0.8), rgba(41,128,185,0.8));">
                            <div class="text-center text-white">
                                <i class="fas fa-mountain display-1 mb-3"></i>
                                <h3>25+ Tahun</h3>
                                <p class="mb-0">Pengalaman dalam industri konstruksi dan earthwork</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title text-center text-lg-start">
                        Tentang <span class="text-primary">Nusajaya</span>
                    </h2>
                    <p class="text-muted mb-4">
                        Nusajaya adalah perusahaan yang bergerak dalam bidang jasa konstruksi dengan spesialisasi pada land clearing, penimbunan, pengurukan, dan persewaan alat berat. Dengan pengalaman lebih dari 25 tahun, kami telah menangani berbagai proyek mulai dari skala kecil hingga besar.
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

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 mb-4">
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
                                <h3 class="display-6 fw-bold mb-2">25+</h3>
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

<!-- Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Galeri <span class="text-primary">Proyek</span></h2>
            <p class="lead text-muted">Dokumentasi proyek-proyek yang telah kami kerjakan</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Land clearing project" 
                         class="img-fluid rounded-4 shadow-sm gallery-image">
                    <div class="gallery-overlay">
                        <h5 class="text-white fw-bold">Land Clearing</h5>
                        <p class="text-white-50 mb-0">Pembersihan lahan 5 hektare</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1597149492419-0d900f820b2f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Excavator in action" 
                         class="img-fluid rounded-4 shadow-sm gallery-image">
                    <div class="gallery-overlay">
                        <h5 class="text-white fw-bold">Penimbunan</h5>
                        <p class="text-white-50 mb-0">Proyek infrastruktur Jakarta</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Construction equipment" 
                         class="img-fluid rounded-4 shadow-sm gallery-image">
                    <div class="gallery-overlay">
                        <h5 class="text-white fw-bold">Persewaan Excavator</h5>
                        <p class="text-white-50 mb-0">PC200 untuk proyek perumahan</p>
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

<!-- Latest Blog Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Artikel <span class="text-primary">Terbaru</span></h2>
            <p class="lead text-muted">Tips dan informasi terkini seputar industri konstruksi dan earthwork</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="blog-meta mb-3">
                            <span class="badge bg-primary">Tips & Tricks</span>
                            <small class="text-muted ms-2">15 Mar 2024</small>
                        </div>
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('blog.show', 'tips-land-clearing-efektif') }}" class="text-decoration-none text-dark">
                                Tips Land Clearing yang Efektif dan Ramah Lingkungan
                            </a>
                        </h5>
                        <p class="card-text text-muted">Pelajari teknik-teknik terbaru dalam land clearing yang tidak hanya efektif tetapi juga memperhatikan kelestarian lingkungan.</p>
                        <a href="{{ route('blog.show', 'tips-land-clearing-efektif') }}" class="btn btn-outline-primary btn-sm">
                            Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="blog-meta mb-3">
                            <span class="badge bg-success">Equipment</span>
                            <small class="text-muted ms-2">10 Mar 2024</small>
                        </div>
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('blog.show', 'memilih-excavator-yang-tepat') }}" class="text-decoration-none text-dark">
                                Panduan Memilih Excavator yang Tepat untuk Proyek Anda
                            </a>
                        </h5>
                        <p class="card-text text-muted">Berbagai jenis excavator memiliki keunggulan masing-masing. Pahami cara memilih yang paling sesuai dengan kebutuhan proyek.</p>
                        <a href="{{ route('blog.show', 'memilih-excavator-yang-tepat') }}" class="btn btn-outline-primary btn-sm">
                            Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="blog-meta mb-3">
                            <span class="badge bg-warning">Safety</span>
                            <small class="text-muted ms-2">5 Mar 2024</small>
                        </div>
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('blog.show', 'standar-keselamatan-konstruksi') }}" class="text-decoration-none text-dark">
                                Standar Keselamatan dalam Pekerjaan Konstruksi
                            </a>
                        </h5>
                        <p class="card-text text-muted">Keselamatan kerja adalah prioritas utama. Ketahui standar dan prosedur keselamatan yang harus diterapkan di lokasi konstruksi.</p>
                        <a href="{{ route('blog.show', 'standar-keselamatan-konstruksi') }}" class="btn btn-outline-primary btn-sm">
                            Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('blog') }}" class="btn btn-primary">
                Lihat Semua Artikel <i class="fas fa-arrow-right ms-1"></i>
            </a>
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
