@extends('layouts.app')

@section('title', $product['title'] . ' - Nusajaya')
@section('description', $product['description'])

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-white-50">Produk & Jasa</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $product['title'] }}</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">{{ $product['title'] }}</h1>
                <p class="lead mb-0">{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Detail Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="product-hero-image rounded-4 overflow-hidden shadow">
                    @if(isset($product['image']) && $product['image'])
                        <img src="{{ asset('images/services/' . $product['image']) }}"
                             alt="{{ $product['title'] }}"
                             class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                    @else
                        @switch($product['slug'])
                            @case('penyiapan-lahan')
                                <img src="{{ asset('images/services/earthworks.jpg') }}"
                                     alt="{{ $product['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @case('konstruksi')
                                <img src="{{ asset('images/services/konstruksi.jpg') }}"
                                     alt="{{ $product['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @case('sewa-alat-konstruksi')
                                <img src="{{ asset('images/services/alat-berat.jpg') }}"
                                     alt="{{ $product['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @default
                                <img src="{{ asset('images/services/earthworks.jpg') }}"
                                     alt="{{ $product['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                        @endswitch
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-content">
                    <h2 class="fw-bold mb-4">Detail Layanan</h2>
                    <p class="text-muted mb-4">{{ $product['details'] }}</p>

                    <div class="product-features mb-4">
                        <h4 class="fw-bold mb-3">Keunggulan Layanan:</h4>
                        <div class="row">
                            @foreach($product['features'] as $index => $feature)
                            <div class="col-md-6 mb-2">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary me-2 mt-1"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="product-actions">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-phone me-2"></i>Minta Penawaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
@if($product['slug'] == 'persewaan-excavator')
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Spesifikasi <span class="text-primary">Excavator</span></h2>
            <p class="lead text-muted">Pilihan excavator sesuai kebutuhan proyek Anda</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="spec-card bg-white rounded-4 p-4 shadow-sm h-100">
                    <div class="text-center">
                        <div class="spec-icon text-primary mb-3" style="font-size: 3rem;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="fw-bold mb-3">PC50-PC70</h4>
                        <h6 class="text-primary mb-3">Mini Excavator</h6>
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Berat Operasi:</strong></td>
                            <td>5-7 ton</td>
                        </tr>
                        <tr>
                            <td><strong>Engine Power:</strong></td>
                            <td>36-52 HP</td>
                        </tr>
                        <tr>
                            <td><strong>Bucket Capacity:</strong></td>
                            <td>0.2-0.3 m³</td>
                        </tr>
                        <tr>
                            <td><strong>Max Digging Depth:</strong></td>
                            <td>3.5-4.2 m</td>
                        </tr>
                        <tr>
                            <td><strong>Max Reach:</strong></td>
                            <td>6.2-7.1 m</td>
                        </tr>
                    </table>

                    <div class="text-center mt-3">
                        <span class="badge bg-success">Ideal untuk area terbatas</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="spec-card bg-white rounded-4 p-4 shadow-sm h-100">
                    <div class="text-center">
                        <div class="spec-icon text-primary mb-3" style="font-size: 3rem;">
                            <i class="fas fa-truck-monster"></i>
                        </div>
                        <h4 class="fw-bold mb-3">PC120-PC200</h4>
                        <h6 class="text-primary mb-3">Medium Excavator</h6>
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Berat Operasi:</strong></td>
                            <td>12-20 ton</td>
                        </tr>
                        <tr>
                            <td><strong>Engine Power:</strong></td>
                            <td>90-148 HP</td>
                        </tr>
                        <tr>
                            <td><strong>Bucket Capacity:</strong></td>
                            <td>0.5-0.9 m³</td>
                        </tr>
                        <tr>
                            <td><strong>Max Digging Depth:</strong></td>
                            <td>5.7-6.7 m</td>
                        </tr>
                        <tr>
                            <td><strong>Max Reach:</strong></td>
                            <td>8.8-9.8 m</td>
                        </tr>
                    </table>

                    <div class="text-center mt-3">
                        <span class="badge bg-primary">Serbaguna & efisien</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="spec-card bg-white rounded-4 p-4 shadow-sm h-100">
                    <div class="text-center">
                        <div class="spec-icon text-primary mb-3" style="font-size: 3rem;">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h4 class="fw-bold mb-3">PC300+</h4>
                        <h6 class="text-primary mb-3">Large Excavator</h6>
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Berat Operasi:</strong></td>
                            <td>30+ ton</td>
                        </tr>
                        <tr>
                            <td><strong>Engine Power:</strong></td>
                            <td>200+ HP</td>
                        </tr>
                        <tr>
                            <td><strong>Bucket Capacity:</strong></td>
                            <td>1.4+ m³</td>
                        </tr>
                        <tr>
                            <td><strong>Max Digging Depth:</strong></td>
                            <td>7.5+ m</td>
                        </tr>
                        <tr>
                            <td><strong>Max Reach:</strong></td>
                            <td>11+ m</td>
                        </tr>
                    </table>

                    <div class="text-center mt-3">
                        <span class="badge bg-warning">Heavy duty projects</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Process Flow -->
<section class="py-5 {{ $product['slug'] == 'persewaan-excavator' ? '' : 'bg-light' }}">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Alur Kerja <span class="text-primary">{{ $product['title'] }}</span></h2>
            <p class="lead text-muted">Tahapan sistematis untuk hasil yang optimal</p>
        </div>

        <div class="row">
            @if($product['slug'] == 'land-clearing')
                @php
                    $steps = [
                        ['icon' => 'fas fa-search', 'title' => 'Survey & Assessment', 'desc' => 'Evaluasi kondisi lahan, jenis vegetasi, dan tingkat kesulitan pekerjaan'],
                        ['icon' => 'fas fa-file-alt', 'title' => 'Perencanaan', 'desc' => 'Menyusun rencana kerja, timeline, dan metode pembersihan yang tepat'],
                        ['icon' => 'fas fa-tree', 'title' => 'Land Clearing', 'desc' => 'Eksekusi pembersihan lahan dengan peralatan modern dan teknik yang aman'],
                        ['icon' => 'fas fa-recycle', 'title' => 'Material Handling', 'desc' => 'Penanganan dan pembuangan material organik secara ramah lingkungan']
                    ];
                @endphp
            @elseif($product['slug'] == 'penimbunan')
                @php
                    $steps = [
                        ['icon' => 'fas fa-ruler', 'title' => 'Pengukuran Lahan', 'desc' => 'Survey topografi dan penentuan elevasi yang dibutuhkan'],
                        ['icon' => 'fas fa-truck', 'title' => 'Material Supply', 'desc' => 'Pengadaan material tanah berkualitas sesuai spesifikasi proyek'],
                        ['icon' => 'fas fa-mountain', 'title' => 'Penimbunan', 'desc' => 'Proses penimbunan bertahap dengan kontrol kepadatan optimal'],
                        ['icon' => 'fas fa-check-circle', 'title' => 'Quality Control', 'desc' => 'Pemeriksaan kepadatan dan elevasi sesuai standar yang disepakati']
                    ];
                @endphp
            @elseif($product['slug'] == 'pengurukan')
                @php
                    $steps = [
                        ['icon' => 'fas fa-search-location', 'title' => 'Site Investigation', 'desc' => 'Analisis kondisi tanah dan kebutuhan stabilisasi'],
                        ['icon' => 'fas fa-layer-group', 'title' => 'Material Selection', 'desc' => 'Pemilihan material urugan yang sesuai karakteristik tanah'],
                        ['icon' => 'fas fa-hammer', 'title' => 'Pengurukan', 'desc' => 'Proses pengurukan dengan teknik pemadatan yang tepat'],
                        ['icon' => 'fas fa-clipboard-check', 'title' => 'Testing & Approval', 'desc' => 'Uji kepadatan dan persetujuan hasil pekerjaan']
                    ];
                @endphp
            @else
                @php
                    $steps = [
                        ['icon' => 'fas fa-phone', 'title' => 'Konsultasi', 'desc' => 'Diskusi kebutuhan excavator dan jenis pekerjaan yang akan dilakukan'],
                        ['icon' => 'fas fa-tools', 'title' => 'Unit Selection', 'desc' => 'Pemilihan excavator yang sesuai dengan kondisi dan requirement proyek'],
                        ['icon' => 'fas fa-shipping-fast', 'title' => 'Mobilisasi', 'desc' => 'Pengiriman excavator beserta operator ke lokasi proyek'],
                        ['icon' => 'fas fa-cogs', 'title' => 'Operasional', 'desc' => 'Pelaksanaan pekerjaan dengan monitoring dan support berkala']
                    ];
                @endphp
            @endif

            @foreach($steps as $index => $step)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step-detail text-center">
                    <div class="step-number-detail bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="{{ $step['icon'] }}" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="step-counter bg-secondary text-white rounded-pill px-3 py-1 d-inline-block mb-3" style="font-size: 0.8rem; font-weight: bold;">
                        STEP {{ $index + 1 }}
                    </div>
                    <h5 class="fw-bold mb-3">{{ $step['title'] }}</h5>
                    <p class="text-muted">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="py-5 {{ $product['slug'] == 'persewaan-excavator' ? 'bg-light' : '' }}">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Layanan <span class="text-primary">Terkait</span></h2>
            <p class="lead text-muted">Solusi lengkap untuk kebutuhan konstruksi Anda</p>
        </div>

        <div class="row">
            @php
                $allProducts = [
                    ['slug' => 'land-clearing', 'title' => 'Land Clearing', 'icon' => 'fas fa-tree'],
                    ['slug' => 'penimbunan', 'title' => 'Penimbunan', 'icon' => 'fas fa-mountain'],
                    ['slug' => 'pengurukan', 'title' => 'Pengurukan', 'icon' => 'fas fa-layer-group'],
                    ['slug' => 'persewaan-excavator', 'title' => 'Persewaan Excavator', 'icon' => 'fas fa-tools']
                ];

                $relatedProducts = array_filter($allProducts, function($p) use ($product) {
                    return $p['slug'] !== $product['slug'];
                });
                $relatedProducts = array_slice($relatedProducts, 0, 3);
            @endphp

            @foreach($relatedProducts as $related)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="related-service-card bg-white rounded-4 p-4 shadow-sm h-100 text-center">
                    <div class="service-icon-small text-primary mb-3" style="font-size: 2.5rem;">
                        <i class="{{ $related['icon'] }}"></i>
                    </div>
                    <h5 class="fw-bold mb-3">{{ $related['title'] }}</h5>
                    <p class="text-muted mb-4">Layanan profesional dengan standar kualitas tinggi dan harga kompetitif.</p>
                    <a href="{{ route('products.show', $related['slug']) }}" class="btn btn-outline-primary">
                        Lihat Detail <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                <h3 class="fw-bold mb-2">Tertarik dengan Layanan {{ $product['title'] }}?</h3>
                <p class="mb-0 lead">Dapatkan konsultasi gratis dan penawaran khusus untuk proyek Anda. Tim ahli kami siap membantu.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2 mb-2 mb-sm-0">
                        <i class="fas fa-phone me-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .product-hero-image {
        transition: all 0.3s ease;
    }

    .product-hero-image:hover {
        transform: scale(1.05);
    }

    .spec-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .spec-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .process-step-detail {
        position: relative;
    }

    .process-step-detail::after {
        content: '';
        position: absolute;
        top: 40px;
        right: -50%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-color), transparent);
        z-index: -1;
    }

    .process-step-detail:last-child::after {
        display: none;
    }

    .related-service-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .related-service-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .table td {
        padding: 0.5rem 0;
        border: none;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .process-step-detail::after {
            display: none;
        }

        .cta-buttons .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }

        .product-actions .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }
</style>
@endsection
