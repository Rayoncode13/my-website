@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <article class="featured-article">
            {{-- Data dari HomeController --}}
            <img src="{{ $featuredArticle['image_url'] }}" alt="{{ $featuredArticle['title'] }}" class="featured-image">
            <div class="featured-content">
                <span class="category-tag">{{ $featuredArticle['category'] }}</span>
                <h1 class="featured-title">{{ $featuredArticle['title'] }}</h1>
                <div class="featured-meta">
                    <span>Oleh {{ $featuredArticle['author'] }}</span>
                    <span>•</span>
                    <span>{{ $featuredArticle['date'] }}</span>
                    <span>•</span>
                    <span>{{ $featuredArticle['reads'] }} dibaca</span>
                </div>
            </div>
        </article>
        
        <aside class="side-articles">
            {{-- Loop melalui data dari HomeController --}}
            @foreach ($sideArticles as $article)
                <article class="side-article">
                    <span class="news-category">{{ $article['category'] }}</span>
                    <h3>{{ $article['title'] }}</h3>
                    <p>{{ $article['excerpt'] }}</p>
                </article>
            @endforeach
        </aside>
    </section>

    <!-- Latest News -->
    <section class="latest-news">
        <div class="section-header">
            <h2 class="section-title">Berita Terkini</h2>
            <a href="#" class="view-all">Lihat Semua →</a>
        </div>
        
        <div class="news-grid">
            {{-- Loop melalui data dari HomeController --}}
            @foreach($latestNews as $news)
            <article class="news-card">
                <img src="{{ $news['image_url'] }}" alt="{{ $news['title'] }}" class="news-image">
                <div class="news-content">
                    <div class="news-category">{{ $news['category'] }}</div>
                    <h3 class="news-title">{{ $news['title'] }}</h3>
                    <p class="news-excerpt">{{ $news['excerpt'] }}</p>
                    <div class="news-meta">
                        <span>2 jam lalu</span>
                        <span>{{ $news['read_time'] }} baca</span>
                    </div>
                </div>
            </article>
            @endforeach

             {{-- Contoh artikel tambahan statis untuk melengkapi desain --}}
            <article class="news-card">
                <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400&h=200&fit=crop" alt="Gaming" class="news-image">
                <div class="news-content">
                    <div class="news-category">Gaming</div>
                    <h3 class="news-title">Steam Deck 2 Hadir dengan Performa Setara PS5</h3>
                    <p class="news-excerpt">Valve mengumumkan handheld gaming terbaru dengan spesifikasi yang menggiurkan...</p>
                    <div class="news-meta">
                        <span>10 jam lalu</span>
                        <span>5 menit baca</span>
                    </div>
                </div>
            </article>
            
            <article class="news-card">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=400&h=200&fit=crop" alt="Social Media" class="news-image">
                <div class="news-content">
                    <div class="news-category">Media Sosial</div>
                    <h3 class="news-title">Meta Umumkan Fitur Hologram untuk WhatsApp</h3>
                    <p class="news-excerpt">Video call akan naik level dengan teknologi hologram 3D yang realistis...</p>
                    <div class="news-meta">
                        <span>12 jam lalu</span>
                        <span>4 menit baca</span>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Trending Section -->
    <section class="trending">
        <div class="trending-container">
            <h2 class="section-title">Trending Hari Ini</h2>
            <div class="trending-grid">
                <div class="trending-item">
                    <span class="trending-number">01</span>
                    <div class="trending-content">
                        <h4>Elon Musk Akuisisi OpenAI</h4>
                        <p>125K pembaca</p>
                    </div>
                </div>
                <div class="trending-item">
                    <span class="trending-number">02</span>
                    <div class="trending-content">
                        <h4>Samsung Galaxy S25 Ultra Bocor</h4>
                        <p>98K pembaca</p>
                    </div>
                </div>
                <div class="trending-item">
                    <span class="trending-number">03</span>
                    <div class="trending-content">
                        <h4>Google Bard vs ChatGPT</h4>
                        <p>87K pembaca</p>
                    </div>
                </div>
                <div class="trending-item">
                    <span class="trending-number">04</span>
                    <div class="trending-content">
                        <h4>Metaverse Bangkrut?</h4>
                        <p>76K pembaca</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <h2>Dapatkan Update Teknologi Terkini</h2>
        <p>Bergabunglah dengan 50,000+ pembaca untuk mendapatkan berita teknologi terhangat langsung di inbox Anda</p>
        <form class="newsletter-form" action="/subscribe" method="POST">
             @csrf <!-- Penting untuk keamanan form di Laravel -->
            <input type="email" name="email" class="newsletter-input" placeholder="Masukkan email Anda" required>
            <button type="submit" class="newsletter-button">Berlangganan</button>
        </form>
    </section>
@endsection
