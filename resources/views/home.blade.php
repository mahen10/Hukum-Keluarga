<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hukum Keluarga Indonesia - Solusi & Edukasi Hukum Terpercaya</title>
    <meta name="description" content="Website informasi, edukasi, dan pendampingan hukum keluarga terbaik di Indonesia. Panduan lengkap perceraian, hak asuh anak, warisan, dan pernikahan.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- CSS and JS (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-800 bg-slate-50 min-h-screen flex flex-col">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-white transition-all duration-300 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="p-2 bg-primary/5 text-accent rounded-lg group-hover:bg-primary/10 transition-colors">
                        <i data-lucide="scale" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <span class="block font-serif font-bold text-lg md:text-xl text-primary tracking-wide leading-tight group-hover:text-accent transition-colors">HUKUM KELUARGA</span>
                        <span class="block font-serif font-bold text-sm text-primary tracking-wider -mt-1 leading-tight group-hover:text-accent transition-colors">INDONESIA</span>
                        <span class="block text-[10px] text-slate-400 font-medium tracking-normal mt-0.5">Informasi & Edukasi Hukum Keluarga</span>
                    </div>
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-accent font-semibold border-b-2 border-accent pb-1">Home</a>
                    <a href="{{ route('tentang-kami') }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Tentang Kami</a>
                    <a href="#layanan" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Layanan</a>
                    <a href="{{ route('artikel') }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Artikel</a>
                    <a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Peraturan</a>
                    <a href="#faq" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">FAQ</a>
                    <a href="#kontak" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Kontak</a>
                </nav>

                <!-- Consultation CTA Button -->
                <div class="hidden lg:block">
                    <a href="#kontak" class="inline-flex items-center space-x-2 bg-primary text-white px-5 py-2.5 rounded-md hover:bg-accent hover:shadow-lg transition-all duration-300 font-medium text-sm">
                        <i data-lucide="phone-call" class="w-4 h-4"></i>
                        <span>KONSULTASI</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-btn" class="p-2 rounded-md text-slate-600 hover:text-primary hover:bg-slate-100 focus:outline-none transition-colors" aria-expanded="false">
                        <i data-lucide="menu" class="w-6 h-6 menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden flex-col bg-white border-t border-slate-100 py-4 px-6 space-y-4 shadow-inner">
            <a href="{{ route('home') }}" class="text-accent font-semibold">Home</a>
            <a href="{{ route('tentang-kami') }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Tentang Kami</a>
            <a href="#layanan" class="text-slate-600 hover:text-primary font-medium transition-colors">Layanan</a>
            <a href="{{ route('artikel') }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Artikel</a>
            <a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Peraturan</a>
            <a href="#faq" class="text-slate-600 hover:text-primary font-medium transition-colors">FAQ</a>
            <a href="#kontak" class="text-slate-600 hover:text-primary font-medium transition-colors">Kontak</a>
            <a href="#kontak" class="flex items-center justify-center space-x-2 bg-primary text-white py-3 rounded-md hover:bg-accent transition-colors font-medium">
                <i data-lucide="phone-call" class="w-4 h-4"></i>
                <span>KONSULTASI</span>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:py-36 bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
        <!-- Background light shapes -->
        <div class="absolute top-1/4 -right-64 w-[500px] h-[500px] bg-primary/2 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 -left-64 w-[500px] h-[500px] bg-accent/2 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left fade-in">
                    <div class="inline-flex items-center space-x-2 bg-primary/5 text-primary-light px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider">
                        <i data-lucide="shield-check" class="w-4 h-4 text-accent"></i>
                        <span>Informasi & Edukasi Hukum Keluarga</span>
                    </div>
                    <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-bold text-primary leading-tight">
                        Solusi Hukum Keluarga <br>
                        <span class="text-accent">untuk Masa Depan</span> <br>
                        yang Lebih Baik
                    </h1>
                    <p class="text-slate-600 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light">
                        Memberikan informasi, edukasi, dan pendampingan hukum terkait permasalahan keluarga berdasarkan peraturan perundang-undangan yang berlaku di Indonesia.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center gap-4 pt-2">
                        <a href="#layanan" class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 bg-primary text-white px-8 py-3.5 rounded-md hover:bg-primary-light hover:shadow-lg transition-all duration-300 font-semibold tracking-wide">
                            <i data-lucide="book-open" class="w-5 h-5"></i>
                            <span>PELAJARI SEKARANG</span>
                        </a>
                        <a href="#kontak" class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 bg-accent text-white px-8 py-3.5 rounded-md hover:bg-accent-light hover:shadow-lg transition-all duration-300 font-semibold tracking-wide">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                            <span>HUBUNGI KAMI</span>
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="lg:col-span-5 relative flex justify-center fade-in">
                    <div class="relative w-full max-w-md lg:max-w-none">
                        <div class="absolute -inset-4 border border-accent/20 rounded-2xl transform rotate-2 pointer-events-none"></div>
                        <div class="absolute -inset-2 border-2 border-primary/10 rounded-2xl transform -rotate-1 pointer-events-none"></div>
                        
                        <!-- Main Image -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white border-4 border-white aspect-[4/3] sm:aspect-[4/3] lg:aspect-square">
                            <img src="{{ asset('hero_banner.png') }}" alt="Hukum Keluarga Indonesia" class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami Section -->
    <section id="layanan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Layanan Kami</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Kami Siap Membantu Anda</h2>
                <div class="w-16 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1: Perceraian -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl p-8 hover:bg-white hover:shadow-xl hover:border-accent/30 transition-all duration-300 group flex flex-col h-full fade-in">
                    <div class="w-14 h-14 bg-red-50 text-red-500 rounded-lg flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-accent transition-all duration-300">
                        <i data-lucide="heart-off" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary mb-3">Perceraian</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                        Informasi lengkap mengenai prosedur perceraian, hak dan kewajiban suami istri di Pengadilan Agama maupun Pengadilan Negeri.
                    </p>
                    <a href="{{ route('artikel', ['cat' => 'perceraian']) }}" class="inline-flex items-center text-accent group-hover:text-primary font-semibold text-sm transition-colors mt-auto">
                        <span>Selengkapnya</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Card 2: Hak Asuh Anak -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl p-8 hover:bg-white hover:shadow-xl hover:border-accent/30 transition-all duration-300 group flex flex-col h-full fade-in">
                    <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-lg flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-accent transition-all duration-300">
                        <i data-lucide="users" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary mb-3">Hak Asuh Anak</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                        Panduan mengenai hak asuh anak setelah perceraian, syarat wali, dan nafkah anak sesuai dengan hukum yang berlaku.
                    </p>
                    <a href="{{ route('artikel', ['cat' => 'hak-asuh']) }}" class="inline-flex items-center text-accent group-hover:text-primary font-semibold text-sm transition-colors mt-auto">
                        <span>Selengkapnya</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Card 3: Warisan -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl p-8 hover:bg-white hover:shadow-xl hover:border-accent/30 transition-all duration-300 group flex flex-col h-full fade-in">
                    <div class="w-14 h-14 bg-amber-50 text-amber-500 rounded-lg flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-accent transition-all duration-300">
                        <i data-lucide="home" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary mb-3">Warisan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                        Tata cara pembagian harta warisan menurut hukum Islam (Faraid) and Kitab Undang-Undang Hukum Perdata (KUHPerdata).
                    </p>
                    <a href="{{ route('artikel', ['cat' => 'warisan']) }}" class="inline-flex items-center text-accent group-hover:text-primary font-semibold text-sm transition-colors mt-auto">
                        <span>Selengkapnya</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Card 4: Pernikahan -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl p-8 hover:bg-white hover:shadow-xl hover:border-accent/30 transition-all duration-300 group flex flex-col h-full fade-in">
                    <div class="w-14 h-14 bg-indigo-50 text-indigo-500 rounded-lg flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-accent transition-all duration-300">
                        <i data-lucide="heart" class="w-7 h-7"></i>
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary mb-3">Pernikahan</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                        Informasi seputar pendaftaran perkawinan, perjanjian kawin (pranikah), poligami, dan pembatalan pernikahan.
                    </p>
                    <a href="{{ route('artikel', ['cat' => 'pernikahan']) }}" class="inline-flex items-center text-accent group-hover:text-primary font-semibold text-sm transition-colors mt-auto">
                        <span>Selengkapnya</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih Kami Section -->
    <section class="py-20 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(181,138,61,0.1),transparent_40%)] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Mengapa Memilih Kami</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-white">Komitmen Kami untuk Anda</h2>
                <div class="w-16 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="text-center md:text-left space-y-4 p-4 hover:bg-white/5 rounded-xl transition-all duration-300 fade-in">
                    <div class="w-12 h-12 bg-accent text-primary rounded-full flex items-center justify-center mx-auto md:mx-0">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-lg font-bold text-accent">Informasi Akurat</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Semua informasi disusun berdasarkan peraturan perundang-undangan yang berlaku di Indonesia secara akurat dan valid.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center md:text-left space-y-4 p-4 hover:bg-white/5 rounded-xl transition-all duration-300 fade-in">
                    <div class="w-12 h-12 bg-accent text-primary rounded-full flex items-center justify-center mx-auto md:mx-0">
                        <i data-lucide="gavel" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-lg font-bold text-accent">Mudah Dipahami</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Bahasa hukum yang kaku kami sederhanakan agar mudah dipahami oleh masyarakat umum tanpa mengurangi esensi hukumnya.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center md:text-left space-y-4 p-4 hover:bg-white/5 rounded-xl transition-all duration-300 fade-in">
                    <div class="w-12 h-12 bg-accent text-primary rounded-full flex items-center justify-center mx-auto md:mx-0">
                        <i data-lucide="briefcase" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-lg font-bold text-accent">Profesional</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Didukung oleh tim hukum yang memiliki sertifikasi resmi dan berpengalaman luas di bidang hukum perdata keluarga.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center md:text-left space-y-4 p-4 hover:bg-white/5 rounded-xl transition-all duration-300 fade-in">
                    <div class="w-12 h-12 bg-accent text-primary rounded-full flex items-center justify-center mx-auto md:mx-0">
                        <i data-lucide="lock" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-lg font-bold text-accent">Privasi Terjaga</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Kami menjamin keamanan dan kerahasiaan seluruh data klien dengan sistem privasi yang sangat aman dan beretika.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Terbaru Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Artikel Terbaru</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Informasi Hukum Terupdate</h2>
                <div class="w-16 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Article 1 -->
                <article class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full fade-in">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=600&q=80" alt="Cara Mengurus Perceraian" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-accent uppercase mb-2">Perceraian</span>
                        <h3 class="font-serif text-base font-bold text-primary mb-2 line-clamp-2 hover:text-accent transition-colors">
                            <a href="{{ route('artikel') }}">Cara Mengurus Perceraian di Pengadilan Agama</a>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3">
                            Langkah-langkah mengajukan gugatan cerai, syarat dokumen, biaya perkara, dan estimasi waktu proses sidang di Pengadilan Agama.
                        </p>
                        <div class="flex items-center justify-between text-[11px] text-slate-400 mt-auto pt-4 border-t border-slate-100">
                            <span class="flex items-center"><i data-lucide="calendar" class="w-3.5 h-3.5 mr-1"></i> 25 Mei 2024</span>
                            <span class="flex items-center"><i data-lucide="user" class="w-3.5 h-3.5 mr-1"></i> Admin</span>
                        </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full fade-in">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80" alt="Hak Asuh Anak Setelah Perceraian" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-accent uppercase mb-2">Hak Asuh Anak</span>
                        <h3 class="font-serif text-base font-bold text-primary mb-2 line-clamp-2 hover:text-accent transition-colors">
                            <a href="{{ route('artikel') }}">Hak Asuh Anak Setelah Perceraian</a>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3">
                            Siapa yang berhak mendapatkan hak asuh anak di bawah umur setelah orang tua berpisah? Ini penjelasannya berdasarkan KHI dan UU Perkawinan.
                        </p>
                        <div class="flex items-center justify-between text-[11px] text-slate-400 mt-auto pt-4 border-t border-slate-100">
                            <span class="flex items-center"><i data-lucide="calendar" class="w-3.5 h-3.5 mr-1"></i> 20 Mei 2024</span>
                            <span class="flex items-center"><i data-lucide="user" class="w-3.5 h-3.5 mr-1"></i> Adv. Rahmat</span>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full fade-in">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=600&q=80" alt="Pembagian Harta Gono Gini" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-accent uppercase mb-2">Warisan</span>
                        <h3 class="font-serif text-base font-bold text-primary mb-2 line-clamp-2 hover:text-accent transition-colors">
                            <a href="{{ route('artikel') }}">Pembagian Harta Gono Gini Menurut Hukum</a>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3">
                            Pengertian harta bersama, tata cara pembagiannya jika terjadi perceraian, serta solusi jika sertifikat atas nama salah satu pihak saja.
                        </p>
                        <div class="flex items-center justify-between text-[11px] text-slate-400 mt-auto pt-4 border-t border-slate-100">
                            <span class="flex items-center"><i data-lucide="calendar" class="w-3.5 h-3.5 mr-1"></i> 15 Mei 2024</span>
                            <span class="flex items-center"><i data-lucide="user" class="w-3.5 h-3.5 mr-1"></i> Admin</span>
                        </div>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition-shadow duration-300 flex flex-col h-full fade-in">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=600&q=80" alt="Warisan Hukum Islam" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <span class="text-xs font-semibold text-accent uppercase mb-2">Warisan</span>
                        <h3 class="font-serif text-base font-bold text-primary mb-2 line-clamp-2 hover:text-accent transition-colors">
                            <a href="{{ route('artikel') }}">Warisan Menurut Hukum Islam dan KUHPerdata</a>
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed mb-4 line-clamp-3">
                            Perbedaan mendasar pembagian warisan menurut hukum waris Islam (Faraid) dan hukum waris KUHPerdata Barat yang berlaku di Indonesia.
                        </p>
                        <div class="flex items-center justify-between text-[11px] text-slate-400 mt-auto pt-4 border-t border-slate-100">
                            <span class="flex items-center"><i data-lucide="calendar" class="w-3.5 h-3.5 mr-1"></i> 10 Mei 2024</span>
                            <span class="flex items-center"><i data-lucide="user" class="w-3.5 h-3.5 mr-1"></i> Adv. Sari</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="text-center fade-in">
                <a href="{{ route('artikel') }}" class="inline-flex items-center justify-center bg-accent text-white px-8 py-3 rounded-md hover:bg-accent-dark hover:shadow-lg transition-all duration-300 font-semibold tracking-wide text-sm">
                    LIHAT SEMUA ARTIKEL
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ & Hubungi Kami Section -->
    <section class="py-20 bg-white" id="faq">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Left: FAQ Section -->
                <div class="lg:col-span-6 space-y-8 fade-in">
                    <div>
                        <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Pertanyaan Yang Sering Diajukan</span>
                        <h2 class="font-serif text-3xl font-bold text-primary">FAQ</h2>
                        <div class="w-12 h-1 bg-accent mt-3 rounded-full"></div>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Item 1 -->
                        <div class="accordion-item border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                            <button class="accordion-trigger w-full flex justify-between items-center p-5 text-left text-primary hover:text-accent font-semibold transition-colors focus:outline-none">
                                <span>Bagaimana cara mengajukan perceraian?</span>
                                <i data-lucide="plus" class="w-5 h-5 text-slate-400 accordion-icon transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content px-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 bg-slate-50">
                                Prosedur pengajuan perceraian dapat dilakukan melalui Pengadilan Agama bagi yang beragama Islam, atau Pengadilan Negeri bagi non-Muslim, dengan mengajukan gugatan cerai dan melengkapi dokumen pendukung seperti KTP, Buku Nikah/Akta Perkawinan, Akta Kelahiran Anak, dan bukti-bukti pendukung lainnya.
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                            <button class="accordion-trigger w-full flex justify-between items-center p-5 text-left text-primary hover:text-accent font-semibold transition-colors focus:outline-none">
                                <span>Apakah hak asuh anak selalu diberikan kepada ibu?</span>
                                <i data-lucide="plus" class="w-5 h-5 text-slate-400 accordion-icon transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content px-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 bg-slate-50">
                                Secara umum, anak di bawah umur (belum mumayyiz atau di bawah 12 tahun) cenderung diprioritaskan hak asuhnya kepada ibu kandung. Namun, hal ini tidak bersifat mutlak. Hakim akan memprioritaskan kepentingan terbaik bagi tumbuh kembang anak. Hak asuh dapat jatuh ke tangan ayah apabila ibu terbukti tidak cakap (misal berperilaku buruk, menelantarkan anak, atau terbukti sakit mental).
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                            <button class="accordion-trigger w-full flex justify-between items-center p-5 text-left text-primary hover:text-accent font-semibold transition-colors focus:outline-none">
                                <span>Apa yang dimaksud dengan harta gono gini?</span>
                                <i data-lucide="plus" class="w-5 h-5 text-slate-400 accordion-icon transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content px-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 bg-slate-50">
                                Harta gono-gini atau harta bersama adalah harta benda yang diperoleh suami dan istri selama perkawinan berlangsung, terlepas dari pihak mana yang menghasilkan atau atas nama siapa aset tersebut didaftarkan. Sesuai UU Perkawinan dan KHI, jika terjadi perceraian, harta bersama ini harus dibagi dua secara adil antara suami dan istri, kecuali diatur berbeda dalam perjanjian pranikah.
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                            <button class="accordion-trigger w-full flex justify-between items-center p-5 text-left text-primary hover:text-accent font-semibold transition-colors focus:outline-none">
                                <span>Bagaimana pembagian warisan menurut hukum Islam?</span>
                                <i data-lucide="plus" class="w-5 h-5 text-slate-400 accordion-icon transition-transform duration-300"></i>
                            </button>
                            <div class="accordion-content px-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 bg-slate-50">
                                Pembagian warisan dalam Islam diatur dalam hukum Kewarisan Islam (Faraid), dengan proporsi yang telah ditentukan dalam nash Al-Qur'an. Anak laki-laki mendapatkan bagian 2:1 dibanding anak perempuan. Suami mendapatkan 1/4 atau 1/2 bagian, sedangkan istri mendapatkan 1/8 atau 1/4 bagian, bergantung pada keberadaan keturunan (anak/cucu). KHI di Indonesia memandu jalannya pembagian secara yuridis bagi umat Muslim.
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="{{ route('artikel') }}?cat=semua" class="inline-flex items-center justify-center bg-accent text-white px-6 py-2.5 rounded-md hover:bg-accent-dark hover:shadow-lg transition-all duration-300 font-semibold tracking-wide text-xs">
                            LIHAT SEMUA FAQ
                        </a>
                    </div>
                </div>

                <!-- Right: Contact info -->
                <div class="lg:col-span-6 space-y-8" id="kontak">
                    <div class="fade-in">
                        <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Hubungi Kami</span>
                        <h2 class="font-serif text-3xl font-bold text-primary">Konsultasi Sekarang</h2>
                        <div class="w-12 h-1 bg-accent mt-3 rounded-full"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                        <div class="md:col-span-7 space-y-6 fade-in">
                            <!-- Detail 1 -->
                            <div class="flex items-start space-x-4">
                                <div class="p-3 bg-slate-100 text-accent rounded-lg mt-1">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary text-sm">Alamat</h4>
                                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Jl. Merdeka No. 123, Jakarta Pusat, DKI Jakarta</p>
                                </div>
                            </div>

                            <!-- Detail 2 -->
                            <div class="flex items-start space-x-4">
                                <div class="p-3 bg-slate-100 text-accent rounded-lg mt-1">
                                    <i data-lucide="phone-call" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary text-sm">Telepon / WhatsApp</h4>
                                    <p class="text-slate-500 text-xs leading-relaxed mt-1">
                                        <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-accent transition-colors font-medium">0812-3456-7890</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Detail 3 -->
                            <div class="flex items-start space-x-4">
                                <div class="p-3 bg-slate-100 text-accent rounded-lg mt-1">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary text-sm">Email</h4>
                                    <p class="text-slate-500 text-xs leading-relaxed mt-1">
                                        <a href="mailto:info@hukumkeluargaindonesia.com" class="hover:text-accent transition-colors">info@hukumkeluargaindonesia.com</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Detail 4 -->
                            <div class="flex items-start space-x-4">
                                <div class="p-3 bg-slate-100 text-accent rounded-lg mt-1">
                                    <i data-lucide="clock" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-primary text-sm">Jam Operasional</h4>
                                    <p class="text-slate-500 text-xs leading-relaxed mt-1">Senin - Sabtu : 08.00 - 17.00 WIB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Image right -->
                        <div class="md:col-span-5 flex justify-center fade-in">
                            <div class="relative w-full max-w-[200px] md:max-w-none rounded-xl overflow-hidden shadow-lg bg-slate-100 aspect-[3/4] border-4 border-white">
                                <img src="{{ asset('lady_justice.png') }}" alt="Lady Justice" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-slate-300 pt-16 pb-8 border-t border-primary-light mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/5">
                <!-- Col 1: About -->
                <div class="lg:col-span-4 space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 text-white">
                        <i data-lucide="scale" class="w-7 h-7 text-accent"></i>
                        <div class="leading-none">
                            <span class="block font-serif font-bold text-base tracking-wider">HUKUM KELUARGA</span>
                            <span class="block font-serif font-bold text-xs text-accent tracking-widest mt-0.5">INDONESIA</span>
                        </div>
                    </a>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Website informasi dan edukasi hukum keluarga di Indonesia. Memberikan informasi akurat, mudah dipahami, dan terpercaya untuk seluruh masyarakat.
                    </p>
                    <!-- Socials -->
                    <div class="flex space-x-3 pt-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-accent hover:text-primary transition-all duration-300 flex items-center justify-center text-slate-300">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-accent hover:text-primary transition-all duration-300 flex items-center justify-center text-slate-300">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-accent hover:text-primary transition-all duration-300 flex items-center justify-center text-slate-300">
                            <i data-lucide="youtube" class="w-4 h-4"></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="w-8 h-8 rounded-full bg-white/5 hover:bg-accent hover:text-primary transition-all duration-300 flex items-center justify-center text-slate-300">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Menu -->
                <div class="lg:col-span-2 space-y-4">
                    <h3 class="text-white font-serif font-semibold text-sm tracking-wider">Menu</h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('home') }}" class="hover:text-accent transition-colors">Home</a></li>
                        <li><a href="{{ route('tentang-kami') }}" class="hover:text-accent transition-colors">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-accent transition-colors">Layanan</a></li>
                        <li><a href="{{ route('artikel') }}" class="hover:text-accent transition-colors">Artikel</a></li>
                        <li><a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="hover:text-accent transition-colors">Peraturan</a></li>
                        <li><a href="#faq" class="hover:text-accent transition-colors">FAQ</a></li>
                        <li><a href="#kontak" class="hover:text-accent transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Col 3: Layanan -->
                <div class="lg:col-span-2 space-y-4">
                    <h3 class="text-white font-serif font-semibold text-sm tracking-wider">Layanan</h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('artikel', ['cat' => 'perceraian']) }}" class="hover:text-accent transition-colors">Perceraian</a></li>
                        <li><a href="{{ route('artikel', ['cat' => 'hak-asuh']) }}" class="hover:text-accent transition-colors">Hak Asuh Anak</a></li>
                        <li><a href="{{ route('artikel', ['cat' => 'warisan']) }}" class="hover:text-accent transition-colors">Warisan</a></li>
                        <li><a href="{{ route('artikel', ['cat' => 'pernikahan']) }}" class="hover:text-accent transition-colors">Pernikahan</a></li>
                        <li><a href="#kontak" class="hover:text-accent transition-colors">Mediasi Keluarga</a></li>
                    </ul>
                </div>

                <!-- Col 4: Links -->
                <div class="lg:col-span-2 space-y-4">
                    <h3 class="text-white font-serif font-semibold text-sm tracking-wider">Link Penting</h3>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-accent transition-colors">UU No. 1 Tahun 1974</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Kompilasi Hukum Islam</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">KUH Perdata</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Peraturan MA</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Literasi Hukum</a></li>
                    </ul>
                </div>

                <!-- Col 5: Newsletter -->
                <div class="lg:col-span-2 space-y-4">
                    <h3 class="text-white font-serif font-semibold text-sm tracking-wider">Newsletter</h3>
                    <p class="text-slate-400 text-[11px] leading-relaxed">Dapatkan informasi terbaru seputar hukum keluarga.</p>
                    <form class="space-y-2" onsubmit="event.preventDefault(); alert('Terima kasih telah berlangganan!'); this.reset();">
                        <input type="email" placeholder="Masukkan email Anda" required class="w-full px-3 py-2 text-xs rounded bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:outline-none focus:border-accent transition-colors">
                        <button type="submit" class="w-full bg-accent text-primary font-bold text-xs py-2 rounded hover:bg-accent-light hover:shadow transition-colors">SUBSCRIBE</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Credits -->
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 space-y-4 md:space-y-0">
                <p>&copy; 2024 Hukum Keluarga Indonesia. All Rights Reserved.</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-accent transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-accent transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
