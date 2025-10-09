@extends('layouts.app')

@section('title', $article['title'] . ' - Artikel Nusajaya')
@section('description', 'Artikel tentang ' . $article['title'] . ' - Tips dan informasi dari para ahli Nusajaya.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('artikel') }}" class="text-white-50">Artikel</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ Str::limit($article['title'], 50) }}</li>
                    </ol>
                </nav>
                <div class="article-meta mb-3">
                    @switch($article['category'])
                        @case('Tips & Tricks')
                            <span class="badge bg-primary fs-6">{{ $article['category'] }}</span>
                            @break
                        @case('Equipment')
                            <span class="badge bg-success fs-6">{{ $article['category'] }}</span>
                            @break
                        @case('Safety')
                            <span class="badge bg-warning fs-6">{{ $article['category'] }}</span>
                            @break
                        @case('Technology')
                            <span class="badge bg-info fs-6">{{ $article['category'] }}</span>
                            @break
                        @default
                            <span class="badge bg-secondary fs-6">{{ $article['category'] }}</span>
                    @endswitch
                </div>
                <h1 class="display-5 fw-bold mb-3">{{ $article['title'] }}</h1>
                <div class="article-info text-white-50">
                    <span class="me-4">
                        <i class="fas fa-user me-1"></i>
                        {{ $article['author'] }}
                    </span>
                    <span class="me-4">
                        <i class="fas fa-calendar-alt me-1"></i>
                        {{ \Carbon\Carbon::parse($article['date'])->locale('id')->translatedFormat('d F Y') }}
                    </span>
                    <span>
                        <i class="fas fa-clock me-1"></i>
                        5 min read
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Article Hero Image -->
                <div class="article-hero-image rounded-4 mb-5 overflow-hidden shadow">
                    @if(isset($article['image']) && $article['image'])
                        <img src="{{ asset('images/blog/' . $article['image']) }}"
                             alt="{{ $article['title'] }}"
                             class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                    @else
                        @switch($article['category'])
                            @case('Tips & Tricks')
                            @case('Penyiapan Lahan')
                                <img src="{{ asset('images/blog/blog-1.jpg') }}"
                                     alt="{{ $article['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @case('Equipment')
                            @case('Alat Konstruksi')
                                <img src="{{ asset('images/blog/blog-2.jpg') }}"
                                     alt="{{ $article['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @case('Safety')
                            @case('Konstruksi')
                                <img src="{{ asset('images/blog/blog-3.jpg') }}"
                                     alt="{{ $article['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @case('Technology')
                                <img src="{{ asset('images/blog/blog-4.jpg') }}"
                                     alt="{{ $article['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                                @break
                            @default
                                <img src="{{ asset('images/blog/blog-1.jpg') }}"
                                     alt="{{ $article['title'] }}"
                                     class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                        @endswitch
                    @endif
                </div>

                <!-- Article Body -->
                <div class="article-content">
                    {!! nl2br(e($article['content'])) !!}
                </div>

                <!-- Article Footer -->
                <div class="article-footer mt-5 pt-4 border-top">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="author-card d-flex align-items-center">
                                <div class="author-avatar bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">{{ $article['author'] }}</h6>
                                    <small class="text-muted">Construction Expert</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end mt-3 mt-md-0">
                            <div class="share-buttons">
                                <span class="text-muted me-2">Bagikan:</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" class="btn btn-sm btn-outline-primary me-2" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($article['title']) }}" class="btn btn-sm btn-outline-info me-2" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" class="btn btn-sm btn-outline-primary me-2" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($article['title'] . ' - ' . request()->fullUrl()) }}" class="btn btn-sm btn-outline-success" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar ps-lg-4">
                    <!-- Table of Contents -->
                    <div class="widget bg-light rounded-4 p-4 mb-4">
                        <h5 class="widget-title fw-bold mb-3">Daftar Isi</h5>
                        <ul class="list-unstyled toc-list">
                            @if(str_contains($article['content'], '##'))
                                @php
                                    $lines = explode("\n", $article['content']);
                                    $tocItems = [];
                                    foreach($lines as $line) {
                                        if(str_starts_with(trim($line), '##') && !str_starts_with(trim($line), '###')) {
                                            $title = trim(str_replace('##', '', $line));
                                            $slug = Str::slug($title);
                                            $tocItems[] = ['title' => $title, 'slug' => $slug];
                                        }
                                    }
                                @endphp
                                @foreach($tocItems as $item)
                                <li class="mb-2">
                                    <a href="#{{ $item['slug'] }}" class="text-decoration-none text-dark toc-link">
                                        <i class="fas fa-chevron-right text-primary me-2"></i>
                                        {{ $item['title'] }}
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <li class="text-muted">Tidak ada sub-heading dalam artikel ini.</li>
                            @endif
                        </ul>
                    </div>

                    <!-- Related Articles -->
                    <div class="widget bg-white border rounded-4 p-4 mb-4">
                        <h5 class="widget-title fw-bold mb-3">Artikel Terkait</h5>
                        <div class="related-articles">
                            @php
                                $relatedArticles = [
                                    [
                                        'title' => 'Tips Memilih Excavator yang Tepat',
                                        'slug' => 'memilih-excavator-yang-tepat',
                                        'category' => 'Equipment'
                                    ],
                                    [
                                        'title' => 'Standar Keselamatan Konstruksi',
                                        'slug' => 'standar-keselamatan-konstruksi',
                                        'category' => 'Safety'
                                    ],
                                    [
                                        'title' => 'Teknologi Terbaru Konstruksi',
                                        'slug' => 'teknologi-terbaru-konstruksi',
                                        'category' => 'Technology'
                                    ]
                                ];

                                // Filter out current article
                                $relatedArticles = array_filter($relatedArticles, function($item) use ($article) {
                                    return $item['slug'] !== $article['slug'];
                                });
                                $relatedArticles = array_slice($relatedArticles, 0, 3);
                            @endphp

                            @foreach($relatedArticles as $related)
                            <div class="related-article-item d-flex mb-3">
                                <div class="related-icon me-3 text-primary" style="font-size: 1.5rem; width: 30px;">
                                    @switch($related['category'])
                                        @case('Equipment')
                                            <i class="fas fa-tools"></i>
                                            @break
                                        @case('Safety')
                                            <i class="fas fa-hard-hat"></i>
                                            @break
                                        @case('Technology')
                                            <i class="fas fa-microchip"></i>
                                            @break
                                        @default
                                            <i class="fas fa-newspaper"></i>
                                    @endswitch
                                </div>
                                <div>
                                    <h6 class="mb-1">
                                        <a href="{{ route('artikel.show', $related['slug']) }}" class="text-decoration-none text-dark">
                                            {{ $related['title'] }}
                                        </a>
                                    </h6>
                                    <small class="text-muted">{{ $related['category'] }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div class="widget bg-primary text-white rounded-4 p-4">
                        <h5 class="widget-title fw-bold mb-3">Butuh Konsultasi?</h5>
                        <p class="mb-3">Tim ahli kami siap membantu proyek Anda dengan solusi terbaik.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light w-100">
                            <i class="fas fa-phone me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navigation -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="article-navigation d-flex justify-content-between align-items-center">
                    <div class="nav-previous">
                        @php
                            $allSlugs = ['tips-land-clearing-efektif', 'memilih-excavator-yang-tepat', 'standar-keselamatan-konstruksi', 'teknologi-terbaru-konstruksi'];
                            $currentIndex = array_search($article['slug'], $allSlugs);
                            $prevSlug = $currentIndex > 0 ? $allSlugs[$currentIndex - 1] : null;
                            $nextSlug = $currentIndex < count($allSlugs) - 1 ? $allSlugs[$currentIndex + 1] : null;
                        @endphp

                        @if($prevSlug)
                        <a href="{{ route('artikel.show', $prevSlug) }}" class="btn btn-outline-primary">
                            <i class="fas fa-chevron-left me-2"></i>Artikel Sebelumnya
                        </a>
                        @endif
                    </div>

                    <div class="nav-back">
                        <a href="{{ route('artikel') }}" class="btn btn-primary">
                            <i class="fas fa-th-large me-2"></i>Kembali ke Artikel
                        </a>
                    </div>

                    <div class="nav-next">
                        @if($nextSlug)
                        <a href="{{ route('artikel.show', $nextSlug) }}" class="btn btn-outline-primary">
                            Artikel Selanjutnya<i class="fas fa-chevron-right ms-2"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .article-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .article-content h2 {
        color: var(--primary-color);
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .article-content h3 {
        color: var(--secondary-color);
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .article-content ul, .article-content ol {
        margin-bottom: 1.5rem;
    }

    .article-content li {
        margin-bottom: 0.5rem;
    }

    .widget {
        position: sticky;
        top: 120px;
    }

    .toc-link:hover {
        color: var(--primary-color) !important;
    }

    .related-article-item a:hover {
        color: var(--primary-color) !important;
    }

    .share-buttons .btn:hover {
        transform: translateY(-2px);
    }

    .comment-avatar {
        flex-shrink: 0;
    }

    .article-navigation .btn {
        transition: all 0.3s ease;
    }

    .article-navigation .btn:hover {
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .widget {
            position: static;
            margin-bottom: 2rem;
        }

        .article-navigation {
            flex-direction: column;
        }

        .article-navigation > div {
            margin-bottom: 0.5rem;
            width: 100%;
        }

        .article-navigation .btn {
            width: 100%;
        }

        .share-buttons {
            text-align: center;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Smooth scrolling for table of contents
    document.querySelectorAll('.toc-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Comment form handler
    document.querySelector('.comment-form form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Terima kasih atas komentarnya! Komentar Anda akan ditinjau terlebih dahulu sebelum dipublikasikan.');
        this.reset();
    });

    // Progress bar for reading
    window.addEventListener('scroll', function() {
        const article = document.querySelector('.article-content');
        if (article) {
            const articleTop = article.offsetTop;
            const articleHeight = article.offsetHeight;
            const windowHeight = window.innerHeight;
            const scrollY = window.scrollY;

            const progress = Math.min(
                Math.max((scrollY - articleTop + windowHeight) / articleHeight, 0),
                1
            );

            // You can use this progress value to show a reading progress bar
            console.log('Reading progress:', Math.round(progress * 100) + '%');
        }
    });
</script>
@endsection
