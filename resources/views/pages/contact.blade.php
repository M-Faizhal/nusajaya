@extends('layouts.app')

@section('title', 'Kontak - Nusajaya')
@section('description', 'Hubungi Nusajaya untuk konsultasi gratis dan penawaran terbaik untuk kebutuhan land clearing, penimbunan, pengurukan, dan persewaan excavator Anda.')

@section('content')
<!-- Page Header -->
<section class="page-header" style="padding: 4rem 0 2rem 0; margin-bottom: 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Kontak</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-2">Hubungi Kami</h1>
                <p class="lead mb-0">Siap membantu proyek Anda dengan solusi terbaik</p>
            </div>
        </div>
    </div>
</section>

<!-- Office Image Section -->
<section class="py-3">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-8 mx-auto">
                <div class="office-image text-center">
                    <img src="{{ asset('images/nusajaya.jpeg') }}"
                         alt="Nusajaya Logo"
                         class="img-fluid rounded-4 shadow" style="max-width: 300px;">
                    <div class="mt-2">
                        <h5 class="fw-bold mb-1">Kantor Nusajaya</h5>
                        <p class="text-muted mb-0 small">Manggarai Selatan, Tebet, Jakarta Selatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="contact-info-card bg-white rounded-3 p-3 shadow-sm h-100 text-center">
                    <div class="contact-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Telepon</h6>
                    <p class="text-muted mb-2 small">Hubungi kami langsung untuk konsultasi cepat</p>
                    <div class="contact-details">
                        <p class="mb-1"><strong>+62 852 3107 7779</strong></p>
                        <small class="text-muted">Senin - Sabtu: 08:00 - 17:00</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="contact-info-card bg-white rounded-3 p-3 shadow-sm h-100 text-center">
                    <div class="contact-icon bg-success text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Email</h6>
                    <p class="text-muted mb-2 small">Kirim pertanyaan detail tentang proyek Anda</p>
                    <div class="contact-details">
                        <p class="mb-1"><strong>pt.nusajayaunggul@gmail.com</strong></p>
                        <small class="text-muted">Respon dalam 2-4 jam kerja</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <div class="contact-info-card bg-white rounded-3 p-3 shadow-sm h-100 text-center">
                    <div class="contact-icon bg-warning text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h6 class="fw-bold mb-2">Alamat Kantor</h6>
                    <p class="text-muted mb-2 small">Kunjungi kantor kami untuk diskusi langsung</p>
                    <div class="contact-details">
                        <p class="mb-1"><strong>Manggarai Selatan</strong></p>
                        <p class="mb-1 small">Tebet, Jakarta Selatan</p>
                        <small class="text-muted">Indonesia</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="contact-form-container bg-white rounded-3 p-4 shadow-sm">
                    <div class="text-center mb-3">
                        <h3 class="fw-bold">Kirim <span class="text-primary">Pesan</span></h3>
                        <p class="text-muted mb-0">Ceritakan kebutuhan proyek Anda dan dapatkan penawaran terbaik</p>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Nomor Telepon *</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Layanan yang Dibutuhkan *</label>
                                <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                    <option value="">Pilih layanan...</option>
                                    <option value="Penyiapan Lahan" {{ old('subject') == 'Penyiapan Lahan' ? 'selected' : '' }}>Penyiapan Lahan</option>
                                    <option value="Konstruksi" {{ old('subject') == 'Konstruksi' ? 'selected' : '' }}>Konstruksi</option>
                                    <option value="Sewa Alat Konstruksi" {{ old('subject') == 'Sewa Alat Konstruksi' ? 'selected' : '' }}>Sewa Alat Konstruksi</option>
                                    <option value="Konsultasi Umum" {{ old('subject') == 'Konsultasi Umum' ? 'selected' : '' }}>Konsultasi Umum</option>
                                    <option value="Lainnya" {{ old('subject') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Detail Proyek *</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" placeholder="Ceritakan detail proyek Anda: lokasi, luas area, timeline, budget perkiraan, dll." required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-sidebar">
                    <!-- Team Image -->
                    <div class="sidebar-widget bg-white border rounded-3 p-3 mb-3">
                        <h6 class="fw-bold mb-2">Tim Profesional Kami</h6>
                        <img src="{{ asset('images/nusajaya.jpeg') }}"
                             alt="Nusajaya Professional Team"
                             class="img-fluid rounded-3 mb-2">
                        <p class="text-muted mb-0 small">Tim ahli dengan pengalaman sejak tahun 2021 di industri konstruksi dan earthwork.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-3">
    <div class="container">
        <div class="text-center mb-3">
            <h4 class="fw-bold">Lokasi <span class="text-primary">Kantor</span></h4>
            <p class="text-muted mb-0">Kunjungi kantor kami untuk diskusi langsung dan survey lokasi</p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="map-container bg-light rounded-3 p-3">
                    <!-- Map and Location -->
                    <div class="map-container-wrapper rounded-3 overflow-hidden shadow position-relative">
                        <img src="{{ asset('images/nusajaya.jpeg') }}"
                             alt="Lokasi Nusajaya"
                             class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4);">
                            <div class="text-center text-white">
                                <i class="fas fa-map-marked-alt" style="font-size: 3rem;"></i>
                                <h5 class="mt-2">Lokasi Kantor Kami</h5>
                                <p class="mb-2 small">Manggarai Selatan, Tebet, Jakarta Selatan</p>
                                <a href="https://maps.google.com/?q=Manggarai+Selatan+Tebet+Jakarta+Selatan" class="btn btn-primary btn-sm" target="_blank">
                                    <i class="fas fa-external-link-alt me-2"></i>Buka di Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="text-center mb-3">
            <h4 class="fw-bold">Pertanyaan <span class="text-primary">Umum</span></h4>
            <p class="text-muted mb-0">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="contactFaqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq1">
                                Berapa lama waktu respon untuk penawaran?
                            </button>
                        </h2>
                        <div id="contactFaq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Untuk penawaran via email atau form kontak, kami akan merespon dalam waktu 2-4 jam kerja. Untuk penawaran yang memerlukan survey lokasi, biasanya kami dapat memberikan penawaran dalam 1-2 hari kerja setelah survey dilakukan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq2">
                                Apakah survey lokasi dikenakan biaya?
                            </button>
                        </h2>
                        <div id="contactFaq2" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Survey lokasi untuk area Jabodetabek tidak dikenakan biaya. Untuk area di luar Jabodetabek, akan ada biaya survey yang dapat dipotong dari biaya proyek jika deal.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq3">
                                Bagaimana sistem pembayaran yang berlaku?
                            </button>
                        </h2>
                        <div id="contactFaq3" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Kami menerima pembayaran secara bertahap: DP 30% setelah kontrak ditandatangani, 40% saat pekerjaan 50% selesai, dan 30% sisanya setelah pekerjaan selesai 100%. Pembayaran dapat dilakukan via transfer bank atau cash.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq4">
                                Apakah tersedia layanan darurat di luar jam kerja?
                            </button>
                        </h2>
                        <div id="contactFaq4" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Ya, kami menyediakan layanan darurat untuk kebutuhan urgent dengan koordinasi terlebih dahulu. Silakan hubungi nomor: +62 852 3107 7779.
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
    .contact-info-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .contact-info-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .contact-form .form-control:focus,
    .contact-form .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
    }

    .sidebar-widget {
        transition: all 0.3s ease;
    }

    .sidebar-widget:hover {
        transform: translateY(-2px);
    }

    .business-hours .current-status {
        text-align: center;
    }

    .map-placeholder {
        transition: all 0.3s ease;
    }

    .map-placeholder:hover {
        background-color: var(--primary-color) !important;
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
        .contact-form-container {
            margin-bottom: 2rem;
        }

        .sidebar-widget {
            margin-bottom: 1rem;
        }

        .map-placeholder {
            height: 300px !important;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Form validation and enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.contact-form');
        const phoneInput = document.getElementById('phone');

        // Phone number formatting
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');

            // Auto-format Indonesian phone numbers
            if (value.startsWith('62')) {
                value = '+' + value;
            } else if (value.startsWith('0')) {
                value = '+62' + value.substring(1);
            } else if (value.length > 0 && !value.startsWith('+')) {
                value = '+62' + value;
            }

            e.target.value = value;
        });

        // Enhanced form submission
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
            submitBtn.disabled = true;

            // Re-enable button after form is processed (in case of validation errors)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 5000);
        });

        // Auto-resize textarea
        const textarea = document.getElementById('message');
        textarea.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });

        // Character counter for message
        const maxLength = 1000;
        const counter = document.createElement('small');
        counter.className = 'text-muted';
        textarea.parentNode.appendChild(counter);

        function updateCounter() {
            const remaining = maxLength - textarea.value.length;
            counter.textContent = `${remaining} karakter tersisa`;

            if (remaining < 50) {
                counter.className = 'text-warning';
            } else if (remaining < 20) {
                counter.className = 'text-danger';
            } else {
                counter.className = 'text-muted';
            }
        }

        textarea.addEventListener('input', updateCounter);
        updateCounter();
    });

    // WhatsApp integration with pre-filled message
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappLinks = document.querySelectorAll('a[href*="wa.me"]');

        whatsappLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const name = document.getElementById('name')?.value || '';
                const subject = document.getElementById('subject')?.value || '';
                const message = document.getElementById('message')?.value || '';

                if (name && subject) {
                    const prefilledMessage = `Halo, saya ${name}. Saya tertarik dengan layanan ${subject}. ${message ? 'Detail: ' + message : ''}`;
                    const encodedMessage = encodeURIComponent(prefilledMessage);

                    // Update href with pre-filled message
                    this.href = `https://wa.me/6285231077779?text=${encodedMessage}`;
                }
            });
        });
    });
</script>
@endsection
