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
                    @php
                        // Add IDs to h2 tags for anchor navigation
                        $contentWithIds = preg_replace_callback(
                            '/<h2>(.*?)<\/h2>/i',
                            function($matches) {
                                $title = strip_tags($matches[1]);
                                $slug = Str::slug($title);
                                return '<h2 id="' . $slug . '">' . $matches[1] . '</h2>';
                            },
                            $article['content']
                        );
                    @endphp
                    {!! $contentWithIds !!}
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
                            @if(str_contains($article['content'], '<h2>'))
                                @php
                                    // Extract all h2 headings from HTML content
                                    preg_match_all('/<h2>(.*?)<\/h2>/i', $article['content'], $matches);
                                    $tocItems = [];
                                    foreach($matches[1] as $title) {
                                        $slug = Str::slug(strip_tags($title));
                                        $tocItems[] = ['title' => strip_tags($title), 'slug' => $slug];
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
        color: #333;
    }

    .article-content .lead {
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1.7;
        color: #555;
        margin-bottom: 2rem;
        padding: 1.5rem;
        background: #f8f9fa;
        border-left: 4px solid var(--primary-color);
        border-radius: 0.5rem;
    }

    .article-content h2 {
        color: var(--primary-color);
        margin-top: 3rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid var(--primary-color);
        font-size: 2rem;
        font-weight: 700;
    }

    .article-content h3 {
        color: var(--secondary-color);
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 600;
    }

    .article-content h4 {
        color: #444;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        font-size: 1.25rem;
        font-weight: 600;
    }

    .article-content h5 {
        color: #555;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .article-content p {
        margin-bottom: 1.5rem;
        text-align: justify;
    }

    .article-content ul, .article-content ol {
        margin-bottom: 1.5rem;
        padding-left: 2rem;
    }

    .article-content li {
        margin-bottom: 0.75rem;
        line-height: 1.7;
    }

    .article-content strong {
        color: #222;
        font-weight: 600;
    }

    .article-content .alert {
        margin: 2rem 0;
        padding: 1.5rem;
        border-radius: 0.5rem;
        border-left: 4px solid;
    }

    .article-content .alert-success {
        background: #d4edda;
        border-color: #28a745;
        color: #155724;
    }

    .article-content .alert-info {
        background: #d1ecf1;
        border-color: #17a2b8;
        color: #0c5460;
    }

    .article-content .alert-warning {
        background: #fff3cd;
        border-color: #ffc107;
        color: #856404;
    }

    .article-content .card {
        margin: 1.5rem 0;
        border: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 0.5rem;
    }

    .article-content .card-body {
        padding: 1.5rem;
    }

    .article-content .card-title {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .widget {
        position: sticky;
        top: 120px;
        max-height: calc(100vh - 140px);
        overflow-y: auto;
    }

    .toc-list {
        max-height: 400px;
        overflow-y: auto;
    }

    .toc-link {
        display: block;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
        padding-left: 0.5rem;
    }

    .toc-link:hover {
        color: var(--primary-color) !important;
        background: rgba(13, 110, 253, 0.1);
        border-left-color: var(--primary-color);
        padding-left: 1rem;
    }

    .toc-link.active {
        color: var(--primary-color) !important;
        background: rgba(13, 110, 253, 0.1);
        border-left-color: var(--primary-color);
        font-weight: 600;
    }

    /* Smooth scroll offset for fixed navbar */
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 100px;
    }

    /* Highlight heading when targeted */
    .article-content h2:target {
        animation: highlight 2s ease;
    }

    @keyframes highlight {
        0% {
            background-color: #fff3cd;
            transform: scale(1.02);
        }
        100% {
            background-color: transparent;
            transform: scale(1);
        }
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

        .article-content h2 {
            font-size: 1.5rem;
        }

        .article-content h3 {
            font-size: 1.25rem;
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
    // Smooth scrolling for table of contents with offset
    document.querySelectorAll('.toc-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                // Remove active class from all links
                document.querySelectorAll('.toc-link').forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Smooth scroll to element with offset
                const navbarHeight = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navbarHeight;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Highlight active TOC item on scroll
    const observerOptions = {
        root: null,
        rootMargin: '-100px 0px -66%',
        threshold: 0
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');

                // Remove active class from all links
                document.querySelectorAll('.toc-link').forEach(link => {
                    link.classList.remove('active');
                });

                // Add active class to corresponding link
                const activeLink = document.querySelector(`.toc-link[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');

                    // Scroll TOC to show active item
                    const tocList = document.querySelector('.toc-list');
                    if (tocList) {
                        const linkTop = activeLink.offsetTop;
                        const tocListHeight = tocList.clientHeight;
                        const linkHeight = activeLink.clientHeight;

                        tocList.scrollTo({
                            top: linkTop - (tocListHeight / 2) + (linkHeight / 2),
                            behavior: 'smooth'
                        });
                    }
                }
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observe all h2 elements
    document.querySelectorAll('.article-content h2[id]').forEach(heading => {
        observer.observe(heading);
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

    // Set first item as active on page load
    window.addEventListener('load', function() {
        const firstTocLink = document.querySelector('.toc-link');
        if (firstTocLink) {
            firstTocLink.classList.add('active');
        }
    });
</script>
@endsection
