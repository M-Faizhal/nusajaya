@extends('layouts.app')

@section('title', 'Blog - Nusajaya')
@section('description', 'Artikel dan tips terbaru seputar land clearing, earthwork, excavator, dan industri konstruksi dari para ahli Nusajaya.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">Blog & Artikel</h1>
                <p class="lead mb-0">Tips, informasi, dan insights terbaru dari dunia konstruksi dan earthwork</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories Filter -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-categories text-center">
                    <button class="btn btn-outline-primary active me-2 mb-2" data-category="all">Semua Artikel</button>
                    <button class="btn btn-outline-primary me-2 mb-2" data-category="tips">Tips & Tricks</button>
                    <button class="btn btn-outline-primary me-2 mb-2" data-category="equipment">Equipment</button>
                    <button class="btn btn-outline-primary me-2 mb-2" data-category="safety">Safety</button>
                    <button class="btn btn-outline-primary me-2 mb-2" data-category="technology">Technology</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Articles -->
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-6 mb-4 blog-item" data-category="{{ strtolower(str_replace(['&', ' '], ['', ''], $article['category'])) }}">
                <article class="blog-card bg-white rounded-4 shadow-sm overflow-hidden h-100">
                    <div class="blog-image-container" style="height: 250px; overflow: hidden;">
                        @switch($article['category'])
                            @case('Tips & Tricks')
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="{{ $article['title'] }}" 
                                     class="img-fluid w-100 h-100" style="object-fit: cover;">
                                @break
                            @case('Equipment')
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="{{ $article['title'] }}" 
                                     class="img-fluid w-100 h-100" style="object-fit: cover;">
                                @break
                            @case('Safety')
                                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="{{ $article['title'] }}" 
                                     class="img-fluid w-100 h-100" style="object-fit: cover;">
                                @break
                            @case('Technology')
                                <img src="https://images.unsplash.com/photo-1592062412843-25c7b45c20c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="{{ $article['title'] }}" 
                                     class="img-fluid w-100 h-100" style="object-fit: cover;">
                                @break
                            @default
                                <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                                     alt="{{ $article['title'] }}" 
                                     class="img-fluid w-100 h-100" style="object-fit: cover;">
                        @endswitch
                    </div>

                    <div class="card-body p-4">
                        <div class="blog-meta mb-3 d-flex align-items-center justify-content-between">
                            <div>
                                @switch($article['category'])
                                    @case('Tips & Tricks')
                                        <span class="badge bg-primary">{{ $article['category'] }}</span>
                                        @break
                                    @case('Equipment')
                                        <span class="badge bg-success">{{ $article['category'] }}</span>
                                        @break
                                    @case('Safety')
                                        <span class="badge bg-warning">{{ $article['category'] }}</span>
                                        @break
                                    @case('Technology')
                                        <span class="badge bg-info">{{ $article['category'] }}</span>
                                        @break
                                    @default
                                        <span class="badge bg-secondary">{{ $article['category'] }}</span>
                                @endswitch
                            </div>
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($article['date'])->locale('id')->translatedFormat('d F Y') }}
                            </small>
                        </div>

                        <h3 class="blog-title fw-bold mb-3">
                            <a href="{{ route('blog.show', $article['slug']) }}" class="text-decoration-none text-dark">
                                {{ $article['title'] }}
                            </a>
                        </h3>

                        <p class="blog-excerpt text-muted mb-4">{{ $article['excerpt'] }}</p>

                        <div class="blog-footer d-flex align-items-center justify-content-between">
                            <div class="author-info">
                                <small class="text-muted">
                                    <i class="fas fa-user me-1"></i>
                                    {{ $article['author'] }}
                                </small>
                            </div>
                            <a href="{{ route('blog.show', $article['slug']) }}" class="btn btn-outline-primary btn-sm">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>

        <!-- Pagination would go here in a real application -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <nav aria-label="Blog pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="fw-bold mb-2">Dapatkan Update Artikel Terbaru</h3>
                <p class="mb-0">Berlangganan newsletter kami untuk mendapatkan tips dan informasi terbaru seputar industri konstruksi dan earthwork.</p>
            </div>
            <div class="col-lg-6">
                <form class="newsletter-form">
                    <div class="input-group input-group-lg">
                        <input type="email" class="form-control" placeholder="Masukkan email Anda..." required>
                        <button class="btn btn-light" type="submit">
                            <i class="fas fa-paper-plane me-1"></i> Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Related Topics -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Topik <span class="text-primary">Populer</span></h2>
            <p class="lead text-muted">Jelajahi topik-topik yang paling banyak dicari</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="topic-card bg-white rounded-4 p-4 text-center shadow-sm h-100">
                    <div class="topic-icon text-primary mb-3" style="font-size: 2.5rem;">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Land Clearing</h5>
                    <p class="text-muted mb-3">Tips dan teknik terbaru dalam pembersihan lahan yang efektif dan ramah lingkungan.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Artikel</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="topic-card bg-white rounded-4 p-4 text-center shadow-sm h-100">
                    <div class="topic-icon text-success mb-3" style="font-size: 2.5rem;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Equipment Guide</h5>
                    <p class="text-muted mb-3">Panduan memilih dan mengoperasikan excavator serta alat berat lainnya.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">Lihat Artikel</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="topic-card bg-white rounded-4 p-4 text-center shadow-sm h-100">
                    <div class="topic-icon text-warning mb-3" style="font-size: 2.5rem;">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Safety Standards</h5>
                    <p class="text-muted mb-3">Panduan keselamatan kerja dan standar K3 dalam industri konstruksi.</p>
                    <a href="#" class="btn btn-outline-warning btn-sm">Lihat Artikel</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="topic-card bg-white rounded-4 p-4 text-center shadow-sm h-100">
                    <div class="topic-icon text-info mb-3" style="font-size: 2.5rem;">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Technology</h5>
                    <p class="text-muted mb-3">Inovasi dan teknologi terbaru yang mengubah industri konstruksi.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">Lihat Artikel</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .blog-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .blog-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .blog-title a:hover {
        color: var(--primary-color) !important;
    }

    .blog-categories .btn {
        transition: all 0.3s ease;
    }

    .blog-categories .btn.active {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    .blog-image-placeholder {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
    }

    .topic-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .topic-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .newsletter-form .form-control:focus {
        border-color: white;
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
    }

    .pagination .page-link {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .pagination .page-item.active .page-link {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .pagination .page-link:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    @media (max-width: 768px) {
        .blog-footer {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .blog-footer .btn {
            margin-top: 1rem;
            width: 100%;
        }

        .newsletter-form .input-group {
            flex-direction: column;
        }

        .newsletter-form .btn {
            margin-top: 0.5rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Blog category filter
    document.addEventListener('DOMContentLoaded', function() {
        const categoryButtons = document.querySelectorAll('[data-category]');
        const blogItems = document.querySelectorAll('.blog-item');

        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active button
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter blog items
                blogItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');

                    if (category === 'all' || itemCategory === category) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Newsletter form
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;

                // In a real application, you would send this to your backend
                alert('Terima kasih! Kami akan mengirimkan update artikel terbaru ke ' + email);
                this.reset();
            });
        }
    });
</script>
@endsection
