@extends('layouts.app')

@section('title', 'Produk & Jasa - Nusajaya')
@section('description', 'Layanan profesional Nusajaya meliputi Penyiapan Lahan, Konstruksi, dan Sewa Alat Konstruksi dengan standar kualitas tinggi dan harga kompetitif.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Produk & Jasa</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">Produk & Layanan Kami</h1>
                <p class="lead mb-0">Solusi lengkap untuk kebutuhan land clearing, earthwork, dan persewaan alat berat</p>
            </div>
        </div>
    </div>
</section>

<!-- Products/Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $index => $product)
            <div class="col-lg-6 mb-5">
                <div class="product-card h-100 {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }}">
                    <div class="row g-0 h-100">
                        <div class="col-md-6">
                            <div class="product-image h-100 rounded-start overflow-hidden">
                                @switch($product['slug'])
                                    @case('penyiapan-lahan')
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                             alt="Penyiapan lahan service"
                                             class="img-fluid h-100 w-100" style="object-fit: cover;">
                                        @break
                                    @case('konstruksi')
                                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                             alt="Konstruksi service"
                                             class="img-fluid h-100 w-100" style="object-fit: cover;">
                                        @break
                                    @case('sewa-alat-konstruksi')
                                        <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                             alt="Sewa alat konstruksi service"
                                             class="img-fluid h-100 w-100" style="object-fit: cover;">
                                        @break
                                @endswitch
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body h-100 d-flex flex-column justify-content-center p-4">
                                <h3 class="fw-bold mb-3">{{ $product['title'] }}</h3>
                                <p class="text-muted mb-4">{{ $product['description'] }}</p>

                                <ul class="list-unstyled mb-4">
                                    @foreach(array_slice($product['features'], 0, 3) as $feature)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-primary me-2"></i>
                                        {{ $feature }}
                                    </li>
                                    @endforeach
                                </ul>

                                <div class="mt-auto">
                                    <a href="{{ route('products.show', $product['slug']) }}" class="btn btn-primary">
                                        Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Proses <span class="text-primary">Kerja Kami</span></h2>
            <p class="lead text-muted">Alur kerja yang sistematis untuk hasil yang optimal</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; font-size: 1.5rem; font-weight: bold;">
                        1
                    </div>
                    <h5 class="fw-bold mb-3">Konsultasi & Survey</h5>
                    <p class="text-muted">Tim ahli kami akan melakukan survey lokasi dan memberikan konsultasi sesuai kebutuhan proyek Anda.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; font-size: 1.5rem; font-weight: bold;">
                        2
                    </div>
                    <h5 class="fw-bold mb-3">Perencanaan & Proposal</h5>
                    <p class="text-muted">Menyusun rencana kerja detail beserta timeline dan proposal harga yang transparan.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; font-size: 1.5rem; font-weight: bold;">
                        3
                    </div>
                    <h5 class="fw-bold mb-3">Eksekusi Proyek</h5>
                    <p class="text-muted">Pelaksanaan pekerjaan sesuai rencana dengan menggunakan peralatan modern dan tenaga ahli.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; font-size: 1.5rem; font-weight: bold;">
                        4
                    </div>
                    <h5 class="fw-bold mb-3">Quality Control</h5>
                    <p class="text-muted">Inspeksi kualitas hasil pekerjaan dan handover proyek sesuai standar yang disepakati.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Equipment Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Peralatan <span class="text-primary">Modern</span></h2>
            <p class="lead text-muted">Didukung oleh armada excavator dan alat berat terlengkap</p>
        </div>

        <!-- Equipment Gallery -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="equipment-gallery">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                 alt="Mini excavator"
                                 class="img-fluid rounded-4 shadow-sm equipment-gallery-img">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1592062412843-25c7b45c20c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                 alt="Medium excavator"
                                 class="img-fluid rounded-4 shadow-sm equipment-gallery-img">
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                 alt="Large excavator"
                                 class="img-fluid rounded-4 shadow-sm equipment-gallery-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="equipment-card bg-white rounded-4 p-4 shadow-sm h-100 text-center">
                    <div class="equipment-icon text-primary mb-3" style="font-size: 3rem;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Mini Excavator</h5>
                    <p class="text-muted mb-3">PC50 - PC70 untuk pekerjaan di area terbatas dan proyek skala kecil hingga menengah.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-primary me-2"></i> Mobilitas tinggi</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Fuel efficient</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Operator berpengalaman</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="equipment-card bg-white rounded-4 p-4 shadow-sm h-100 text-center">
                    <div class="equipment-icon text-primary mb-3" style="font-size: 3rem;">
                        <i class="fas fa-truck-monster"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Medium Excavator</h5>
                    <p class="text-muted mb-3">PC120 - PC200 untuk proyek konstruksi dan earthwork skala menengah hingga besar.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-primary me-2"></i> Power optimal</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Versatilitas tinggi</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Maintenance rutin</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="equipment-card bg-white rounded-4 p-4 shadow-sm h-100 text-center">
                    <div class="equipment-icon text-primary mb-3" style="font-size: 3rem;">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Large Excavator</h5>
                    <p class="text-muted mb-3">PC300+ untuk proyek mining, infrastructure, dan mass excavation berskala besar.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-primary me-2"></i> High productivity</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Heavy duty operation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Advanced technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                <h3 class="fw-bold mb-2">Butuh Layanan Profesional untuk Proyek Anda?</h3>
                <p class="mb-0 lead">Konsultasikan kebutuhan proyek Anda dengan tim ahli kami dan dapatkan solusi terbaik.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2 mb-2 mb-sm-0">
                        <i class="fas fa-phone me-2"></i>Konsultasi Gratis
                    </a>
                    <a href="https://wa.me/6281234567890" class="btn btn-success btn-lg mb-2 mb-sm-0" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Pertanyaan <span class="text-primary">Umum</span></h2>
            <p class="lead text-muted">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Berapa lama proses land clearing untuk area 1 hektare?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Waktu land clearing tergantung pada kondisi lahan, jenis vegetasi, dan aksesibilitas lokasi. Untuk area 1 hektare dengan kondisi normal, biasanya membutuhkan waktu 3-5 hari. Kami akan memberikan estimasi waktu yang akurat setelah survey lokasi.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Apakah menyediakan layanan di luar Jakarta?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, kami melayani area Jabodetabek dan sekitarnya. Untuk wilayah yang lebih jauh, akan ada biaya mobilisasi tambahan. Silakan hubungi kami untuk diskusi detail lokasi proyek Anda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Bagaimana sistem pembayaran untuk penyewaan excavator?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kami menawarkan fleksibilitas sistem pembayaran: harian, mingguan, atau bulanan. Untuk sewa jangka panjang, tersedia diskon khusus. Pembayaran dapat dilakukan cash atau transfer dengan DP minimal 30%.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Apakah harga sudah termasuk operator dan bahan bakar?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Harga sewa excavator sudah termasuk operator berpengalaman. Untuk bahan bakar, dapat diatur sesuai kesepakatan - bisa ditanggung klien atau kami dengan sistem pembayaran terpisah.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .product-card {
        transition: all 0.3s ease;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .process-step {
        position: relative;
    }

    .process-step::after {
        content: '';
        position: absolute;
        top: 40px;
        right: -50%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), transparent);
        z-index: -1;
    }

    .process-step:last-child::after {
        display: none;
    }

    .equipment-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .equipment-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: var(--primary-color);
    }

    .accordion-button:not(.collapsed) {
        background-color: var(--primary-color);
        color: white;
    }

    @media (max-width: 768px) {
        .process-step::after {
            display: none;
        }

        .cta-buttons .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }

        .product-card .row {
            flex-direction: column !important;
        }
    }
</style>
@endsection
