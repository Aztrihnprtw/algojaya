<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Algo Jaya - Comfortable Socks </title>
   <link rel="icon" href="{{ asset('images/logo-algojaya.png') }}?v=2" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- 1. WAJIB ADA: CDN Font Awesome untuk memunculkan icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 2. CSS kustom Anda -->
    <link rel="stylesheet" href="{{ asset('css/icon.css') }}">
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
</head>

<body>


<header class="navbar">

    <a href="/" class="logo">
        <img src="{{ asset('images/logo-algojaya.png') }}" alt="Algojaya">
    </a>

    <div class="search-container">
        <div class="search-box">
            <input
                type="text"
                id="searchInput"
                placeholder="What are you looking for?"
                autocomplete="off"
            >
            <span class="search-icon">🔍</span>
        </div>

        <div id="searchDropdown" class="search-dropdown"></div>
    </div>

</header>
    <!-- NAVBAR DI BAWAH -->
    <div class="container nav-content">

        <nav>
            <a href="#home">Casual</a>
            <a href="#about">Formal</a>
            <a href="#services">School</a>
            <a href="#portfolio">Sport</a>
            <a href="#contact">Angkle</a>
            <a href="#contact">Kids</a>
            <a href="#contact">Women</a>
        </nav>

            <i class="fas fa-star icon-produk"></i>
             <span class="teks-produk">Produk baru</span>
        </a>        
    </div>

</header>

<!-- HERO -->

<section class="hero" id="home">

    <div class="container hero-content">

        <div class="hero-text">

            <span class="badge">
                Solusi Digital Profesional
            </span>

            <h1>
                Bangun Bisnis Anda
                <span>Lebih Digital</span>
            </h1>

            <p>
                Kami membantu bisnis berkembang melalui solusi
                teknologi, website, dan layanan digital yang modern,
                efektif, dan profesional.
            </p>

            <div class="hero-buttons">

                <a href="#contact" class="btn primary">
                    Konsultasi Sekarang
                </a>

                <a href="#services" class="btn secondary">
                    Lihat Layanan
                </a>

            </div>

        </div>


        <div class="hero-image">

            <div class="floating-card card-one">
                <strong>100+</strong>
                <small>Project</small>
            </div>

            <div class="hero-circle">

                <div class="hero-icon">
                    &lt;/&gt;
                </div>

            </div>

            <div class="floating-card card-two">
                <strong>99%</strong>
                <small>Client Satisfaction</small>
            </div>

        </div>

    </div>

</section>


<body>

    <div class="category-grid">
      <!-- Kartu 1: Casual -->
      <div class="card">
        <img src="casual.jpg" alt="Casual">
        <div class="card-overlay">
          <h3 class="card-title">CASUAL</h3>
          <a href="#" class="btn-check">CHECK IT NOW &rarr;</a>
        </div>
      </div>

      <!-- Kartu 2: School (Tinggi / 2 baris) -->
      <div class="card card-tall">
        <img src="school.jpg" alt="School">
        <div class="card-overlay">
          <h3 class="card-title">SCHOOL</h3>
          <a href="#" class="btn-check">CHECK IT NOW &rarr;</a>
        </div>
      </div>

      <!-- Kartu 3: Office -->
      <div class="card">
        <img src="office.jpg" alt="Office">
        <div class="card-overlay">
          <h3 class="card-title">OFFICE</h3>
          <a href="#" class="btn-check">CHECK IT NOW &rarr;</a>
        </div>
      </div>

      <!-- Kartu 4: Sport -->
      <div class="card">
        <img src="sport.jpg" alt="Sport">
        <div class="card-overlay">
          <h3 class="card-title">SPORT</h3>
          <a href="#" class="btn-check">CHECK IT NOW &rarr;</a>
        </div>
      </div>

      <!-- Kartu 5: Ankle -->
      <div class="card">
        <img src="ankle.jpg" alt="Ankle">
        <div class="card-overlay">
          <h3 class="card-title">ANKLE</h3>
          <a href="#" class="btn-check">CHECK IT NOW &rarr;</a>
        </div>
      </div>
    </div>

</body>

<body>

    <section class="popular-section">
        <h2 class="section-title">POPULAR PICKS</h2>

        <div class="product-grid">
            
            <!-- Produk 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk1.jpg" alt="Kaos Kaki Pendek Semata Kaki">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Pendek Semata Kaki, Motif Kotak, Allsize...</h3>
                     <span class="search-icon"></span>
                     
                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>


            <!-- Produk 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk2.jpg" alt="Kaos Kaki Olahraga Oldschool">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Oldschool Skate Motif Garis Dua Panjang...</h3>
                     <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk3.jpg" alt="Kaos Kaki Sekolah SD SMP SMA">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Sekolah SD – SMP – SMA dan Pramuka (Premium...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>



            <!-- Produk 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk4.jpg" alt="Kaos Kaki Olahraga Pendek Oldschool Stripe">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Pendek Oldschool Stripe Motif...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>


            <!-- Produk 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk5.jpg" alt="Kaos Kaki Olahraga Pendek Semata Kaki Model Sport">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Pendek Semata Kaki Model Sport...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>

        </div>
    </section>

</body>

<section class="banner-section">
        <!-- Garis Arsiran Atas -->
        <div class="stripe-line"></div>

        <!-- Container 3 Kolom Gambar -->
        <div class="banner-grid">
            <div class="banner-card">
                <img src="banner1.jpg" alt="Banner 1">
            </div>
            <div class="banner-card">
                <img src="banner2.jpg" alt="Banner 2">
            </div>
            <div class="banner-card">
                <img src="banner3.jpg" alt="Banner 3">
            </div>
        </div>

        <!-- Garis Arsiran Bawah -->
        <div class="stripe-line"></div>
    </section>


 <!-- rekomendasi untuk anda -->
<body>

    <section class="popular-section">
        <h2 class="section-title">DIREKOMENDASIKAN UNTUK ANDA</h2>

        <div class="product-grid">
            
            <!-- Produk 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk1.jpg" alt="Kaos Kaki Pendek Semata Kaki">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Pendek Semata Kaki, Motif Kotak, Allsize...</h3>
                     <span class="search-icon"></span>
                     
                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>


            <!-- Produk 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk2.jpg" alt="Kaos Kaki Olahraga Oldschool">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Oldschool Skate Motif Garis Dua Panjang...</h3>
                     <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk3.jpg" alt="Kaos Kaki Sekolah SD SMP SMA">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Sekolah SD – SMP – SMA dan Pramuka (Premium...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>



            <!-- Produk 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk4.jpg" alt="Kaos Kaki Olahraga Pendek Oldschool Stripe">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Pendek Oldschool Stripe Motif...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>


            <!-- Produk 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="produk5.jpg" alt="Kaos Kaki Olahraga Pendek Semata Kaki Model Sport">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kaos Kaki Olahraga Pendek Semata Kaki Model Sport...</h3>
                    <span class="search-icon"></span>

                    <div class="product-footer">
                        <a href="#" class="cart-btn" aria-label="Read More">
                            <span class="btn-text">READ MORE</span>
                            
         <!-- Ikon SVG ditaruh di depan -->
        <svg class="cart-icon-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
                    </a>
            </div>
                </div>
            </div>

        </div>
    </section>

</body>

<body>

    <section class="features-section">
        <!-- Garis Arsiran Diagonal di Atas -->
        <div class="stripe-line"></div>

        <!-- Container 4 Kolom Layanan -->
        <div class="features-grid">
        
         <div class="feature-item">
    <div class="feature-icon">
        <!-- Ikon Truk Pengiriman dengan Garis Kecepatan (SVG) -->
        <svg width="42" height="32" viewBox="0 0 42 32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <!-- Garis-garis kecepatan di kiri -->
            <line x1="1" y1="5" x2="13" y2="5"></line>
            <line x1="3" y1="11" x2="17" y2="11"></line>
            <line x1="1" y1="17" x2="13" y2="17"></line>
            <line x1="3" y1="23" x2="17" y2="23"></line>
            
            <!-- Bagian Badan Truk -->
            <path d="M22 4H33L39 12V25H22V4Z"></path>
            
            <!-- Jendela Kabin Truk -->
            <path d="M31 10H37L35 6H31V10Z"></path>
            
            <!-- Roda Kiri -->
            <circle cx="16" cy="25" r="3.5"></circle>
            
            <!-- Roda Kanan -->
            <circle cx="33" cy="25" r="3.5"></circle>
            
            <!-- Sambungan Bawah -->
            <line x1="9.5" y1="25" x2="12.5" y2="25"></line>
            <line x1="19.5" y1="25" x2="29.5" y2="25"></line>
        </svg>
    </div>
    <div class="feature-text">
        <h3>Pengiriman Cepat</h3>
        <p>Pesanan anda akan langsung kami proses secepatnya</p>
    </div>
</div>

            <!-- Layanan 2: Harga Terbaik -->
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fa-solid fa-rotate-left"></i>
                </div>
                <div class="feature-text">
                    <h3>Harga Terbaik</h3>
                    <p>Kami memberikan harga terbaik untuk setiap konsumen</p>
                </div>
            </div>

            <!-- Layanan 3: Transaksi Aman -->
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div class="feature-text">
                    <h3>Transaksi Aman</h3>
                    <p>Kami pastikan pesanan anda akan di proses</p>
                </div>
            </div>

            <!-- Layanan 4: Hubungi Marketing -->
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <div class="feature-text">
                    <h3>Hubungi Marketing</h3>
                    <p>Hubungi marketing kami <br><span class="phone-number">(0877) 8084 3895</span></p>
                </div>
            </div>

        </div>
    </section>

</body>

<body>

   <section class="marketplace-section">
    <h2 class="marketplace-title">TOKO KAMI DI MARKETPLACE</h2>

    <div class="marketplace-grid">

        <!-- Shopee -->
        <div class="marketplace-card">
            <a href="#" class="marketplace-logo">
                <img src="{{ asset('images/shopee.png') }}" alt="Shopee">
            </a>
            <a href="#" class="visit-btn">KUNJUNGI TOKO</a>
        </div>

        <!-- Kartu marketplace lain, strukturnya sama -->
            <!-- Lazada -->
            <div class="marketplace-card">
                <div class="marketplace-logo">
                    <!-- Ganti src dengan link logo Lazada Anda -->
                    <img src="lazada-logo.png" alt="Lazada">
                </div>
                <a href="#" class="visit-btn">KUNJUNGI TOKO</a>
            </div>

            <!-- TikTok Shop -->
            <div class="marketplace-card">
                <div class="marketplace-logo">
                    <!-- Ganti src dengan link logo TikTok Shop Anda -->
                    <img src="tiktok-logo.png" alt="TikTok Shop">
                </div>
                <a href="#" class="visit-btn">KUNJUNGI TOKO</a>
            </div>

            <!-- Tokopedia -->
            <div class="marketplace-card">
                <div class="marketplace-logo">
                    <!-- Ganti src dengan link logo Tokopedia Anda -->
                    <img src="tokopedia-logo.png" alt="Tokopedia">
                </div>
                <a href="#" class="visit-btn">KUNJUNGI TOKO</a>
            </div>

        </div>
    </section>


    <body>

    <section class="why-section">
        <!-- Judul Bagian -->
        <h2 class="why-title">Kenapa Belanja di Algo Jaya?</h2>

        <!-- Container 3 Kolom Keunggulan -->
        <div class="why-container">
            
            <!-- Poin 1: Rating -->
            <div class="why-item">
                <div class="why-header">
                    <span class="star-icon">★</span>
                    <span class="why-value">4.9 / 5</span>
                </div>
                <p class="why-desc">dari 10.000+ ulasan di semua Marketplace</p>
            </div>

            <!-- Poin 2: Total Pesanan -->
            <div class="why-item">
                <div class="why-header">
                    <!-- Ikon Kotak/Paket SVG -->
                    <svg class="why-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    <span class="why-value">1 Juta+ Pesanan</span>
                </div>
                <p class="why-desc">terkirim ke seluruh Indonesia</p>
            </div>

            <!-- Poin 3: Kualitas Produk -->
            <div class="why-item">
                <div class="why-header">
                    <!-- Ikon Kaos Kaki SVG -->
                    <svg class="why-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 2h4v8a4 4 0 0 1-4 4H5v8H3V2h4z"></path>
                        <path d="M14 2h4v8a4 4 0 0 1-4 4h-2v8h-2V2h4z"></path>
                    </svg>
                    <span class="why-value">Produk Berkualitas</span>
                </div>
                <p class="why-desc">menggunakan bahan berkualitas terbaik</p>
            </div>

        </div>
    </section>


 <body>

    <footer class="site-footer">
        <!-- Container Utama Footer -->
        <div class="footer-container">
            
            <!-- Kolom 1: Brand / Logo & Sosmed -->
            <div class="footer-col brand-col">
                <div class="footer-logo">
                 <a href="/" class="logo">
        <img src="{{ asset('images/logo algojaya.png') }}" alt="Algojaya">
                </a>
                
                </div>
                <p class="brand-desc">
                    Menyediakan produk kaos kaki terlengkap dengan kualitas terbaik. Menyediakan pilihan gaya casual, sekolah, olahraga, hingga formal dan lain-lain.
                </p>
                <div class="social-icons">
                    <a href="#" class="social-btn facebook" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn instagram" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn youtube" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Wrapper Kolom Informasi Kanan -->
            <div class="footer-info-wrapper">
                
                <!-- Kolom 2: Produk Vertikal -->
                <div class="footer-col">
                    <h3 class="vertical-title">PRODUK</h3>
                    <ul class="footer-links">
                        <li><a href="#">Casual</a></li>
                        <li><a href="#">Formal</a></li>
                        <li><a href="#">School</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Ankle</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Women</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Tentang -->
                <div class="footer-col">
                    <h3 class="col-title">TENTANG</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Become a Reseller</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#" class="highlight-link">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak -->
                <div class="footer-col">
                    <h3 class="col-title">KONTAK</h3>
                    <ul class="contact-list">
                        <li>
                            <i class="fa-brands fa-whatsapp contact-icon"></i>
                            <span>082114142925</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp contact-icon"></i>
                            <span>087780843895</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp contact-icon"></i>
                            <span>085218630762</span>
                        </li>
                        <li>
                            <i class="fa-regular fa-envelope contact-icon"></i>
                            <span>nursoleh.bgr@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Kolom 5: Lokasi -->
                <div class="footer-col location-col">
                    <h3 class="col-title">LOKASI</h3>
                    <p class="address-text">
                        Jl. Raya Tapos No.47 RT 1/RW 2<br>
                        Kp. Parung Jambu, Banjarwaru,<br>
                        Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720
                    </p>
                </div>

            </div>
        </div>

        <!-- Divider Line -->
        <div class="footer-divider"></div>

        <!-- Bottom Bar: Copyright, Payment, & Back to Top -->
        <div class="bottom-bar">
            <div class="bottom-container">
                <p class="copyright">Copyright © 2026 ALGOJAYA</p>
                
                <div class="payment-methods">
                    <img src="mastercard.png" alt="Mastercard">
                    <img src="paypal.png" alt="PayPal">
                    <img src="visa.png" alt="VISA">
                    <img src="western-union.png" alt="Western Union">
                    <img src="skrill.png" alt="Skrill">
                </div>
            </div>
            
            <!-- Tombol Back to Top -->
            <a href="#" class="back-to-top" aria-label="Back to Top">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
        </div>
    </footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>