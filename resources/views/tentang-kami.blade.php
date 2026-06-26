<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Hukum Keluarga Indonesia</title>
    <meta name="description" content="Profil lengkap, visi, misi, dan tim profesional Hukum Keluarga Indonesia dalam membantu permasalahan hukum Anda.">
    
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
                    <a href="{{ route('home') }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Home</a>
                    <a href="{{ route('tentang-kami') }}" class="text-accent font-semibold border-b-2 border-accent pb-1">Tentang Kami</a>
                    <a href="{{ route('home') }}#layanan" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Layanan</a>
                    <a href="{{ route('artikel') }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Artikel</a>
                    <a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Peraturan</a>
                    <a href="{{ route('home') }}#faq" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">FAQ</a>
                    <a href="{{ route('home') }}#kontak" class="text-slate-600 hover:text-primary font-medium hover:border-b-2 hover:border-primary pb-1 transition-all">Kontak</a>
                </nav>

                <!-- Consultation CTA Button -->
                <div class="hidden lg:block">
                    <a href="{{ route('home') }}#kontak" class="inline-flex items-center space-x-2 bg-primary text-white px-5 py-2.5 rounded-md hover:bg-accent hover:shadow-lg transition-all duration-300 font-medium text-sm">
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
            <a href="{{ route('home') }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Home</a>
            <a href="{{ route('tentang-kami') }}" class="text-accent font-semibold">Tentang Kami</a>
            <a href="{{ route('home') }}#layanan" class="text-slate-600 hover:text-primary font-medium transition-colors">Layanan</a>
            <a href="{{ route('artikel') }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Artikel</a>
            <a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="text-slate-600 hover:text-primary font-medium transition-colors">Peraturan</a>
            <a href="{{ route('home') }}#faq" class="text-slate-600 hover:text-primary font-medium transition-colors">FAQ</a>
            <a href="{{ route('home') }}#kontak" class="text-slate-600 hover:text-primary font-medium transition-colors">Kontak</a>
            <a href="{{ route('home') }}#kontak" class="flex items-center justify-center space-x-2 bg-primary text-white py-3 rounded-md hover:bg-accent transition-colors font-medium">
                <i data-lucide="phone-call" class="w-4 h-4"></i>
                <span>KONSULTASI</span>
            </a>
        </div>
    </header>

    <!-- Page Header Section -->
    <section class="pt-32 pb-12 bg-primary text-white relative">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(181,138,61,0.08),transparent_40%)] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Kenal Lebih Dekat</span>
            <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl font-bold">Tentang Kami</h1>
            <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto mt-4 leading-relaxed font-light">
                Dedikasi kami adalah menghadirkan edukasi hukum keluarga yang transparan, mudah dipahami, dan dapat diakses oleh semua kalangan masyarakat.
            </p>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Profile Image -->
                <div class="lg:col-span-5 relative flex justify-center fade-in">
                    <div class="relative w-full max-w-md">
                        <div class="absolute -inset-4 border border-accent/20 rounded-2xl transform -rotate-2 pointer-events-none"></div>
                        <div class="absolute -inset-2 border-2 border-primary/10 rounded-2xl transform rotate-1 pointer-events-none"></div>
                        
                        <div class="relative rounded-2xl overflow-hidden shadow-xl bg-slate-100 aspect-[4/3] sm:aspect-[4/3] lg:aspect-square">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" alt="Workspace Kolaborasi Hukum" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Profile Text -->
                <div class="lg:col-span-7 space-y-6 fade-in">
                    <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block">Profil Kami</span>
                    <h2 class="font-serif text-3xl font-bold text-primary">Hukum Keluarga Indonesia</h2>
                    <p class="text-slate-600 text-sm leading-relaxed font-light">
                        Hukum Keluarga Indonesia adalah portal edukasi, literasi, dan layanan hukum perdata keluarga yang didirikan dengan semangat untuk mendekatkan masyarakat dengan hukum. Kami menyadari bahwa hukum perdata keluarga, seperti perkawinan, waris, dan hak asuh anak, merupakan bagian penting dalam kehidupan sehari-hari yang sering kali diselimuti kerumitan birokrasi dan istilah hukum yang sulit dipahami.
                    </p>
                    <p class="text-slate-600 text-sm leading-relaxed font-light">
                        Melalui platform ini, kami berkomitmen menyajikan artikel hukum yang akurat, langkah-langkah praktis penanganan kasus, serta forum mediasi edukatif untuk membantu keluarga Indonesia menyelesaikan permasalahan internal mereka secara mandiri, beretika, dan sesuai dengan hukum negara maupun agama.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Visi -->
                <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm space-y-4 hover:shadow-md transition-shadow fade-in">
                    <div class="w-12 h-12 bg-primary text-accent rounded-xl flex items-center justify-center">
                        <i data-lucide="eye" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-primary">Visi Kami</h3>
                    <p class="text-slate-600 text-sm leading-relaxed font-light">
                        Menjadi platform informasi, edukasi, dan mediasi hukum perdata keluarga terdepan di Indonesia yang terpercaya, akurat, humanis, dan mudah diakses oleh seluruh lapisan masyarakat guna mewujudkan keluarga yang sadar hukum dan harmonis.
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm space-y-4 hover:shadow-md transition-shadow fade-in">
                    <div class="w-12 h-12 bg-primary text-accent rounded-xl flex items-center justify-center">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-primary">Misi Kami</h3>
                    <ul class="space-y-3 text-slate-600 text-sm font-light">
                        <li class="flex items-start">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-accent mr-3 mt-1 flex-shrink-0"></i>
                            <span>Menyederhanakan bahasa hukum agar mudah dicerna oleh masyarakat awam tanpa menghilangkan bobot yuridisnya.</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-accent mr-3 mt-1 flex-shrink-0"></i>
                            <span>Menyebarkan panduan praktis dan edukasi hukum mengenai hak-hak anak dan perempuan dalam struktur rumah tangga.</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-accent mr-3 mt-1 flex-shrink-0"></i>
                            <span>Mengedepankan penyelesaian masalah keluarga secara restoratif melalui mediasi dan musyawarah sebelum menempuh jalur pengadilan.</span>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-accent mr-3 mt-1 flex-shrink-0"></i>
                            <span>Menjembatani akses konsultasi antara masyarakat dengan praktisi hukum keluarga yang berintegritas dan profesional.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <span class="text-accent font-semibold text-xs md:text-sm uppercase tracking-widest block mb-2">Tim Hukum Kami</span>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-primary">Para Praktisi Profesional</h2>
                <div class="w-16 h-1 bg-accent mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team 1 -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full text-center p-6 fade-in">
                    <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6 border-4 border-white shadow-inner">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=300&h=300&q=80" alt="Adv. Rahmat Hidayat" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary">Adv. Rahmat Hidayat, S.H., M.H.</h3>
                    <span class="text-accent font-semibold text-xs uppercase tracking-wider block mt-1 mb-4">Konsultan Hukum Pernikahan & Custody</span>
                    <p class="text-slate-500 text-xs leading-relaxed flex-grow">
                        Memiliki pengalaman lebih dari 8 tahun dalam penanganan sengketa perkawinan dan hak asuh anak di Pengadilan Agama dan Pengadilan Negeri.
                    </p>
                    <div class="flex justify-center space-x-3 pt-6 border-t border-slate-200 mt-6">
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="mail" class="w-4 h-4"></i></a>
                    </div>
                </div>

                <!-- Team 2 -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full text-center p-6 fade-in">
                    <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6 border-4 border-white shadow-inner">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&h=300&q=80" alt="Adv. Sari Wijaya" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary">Adv. Sari Wijaya, S.H., M.Kn.</h3>
                    <span class="text-accent font-semibold text-xs uppercase tracking-wider block mt-1 mb-4">Spesialis Hukum Waris & Aset Keluarga</span>
                    <p class="text-slate-500 text-xs leading-relaxed flex-grow">
                        Ahli dalam bidang hukum waris baik perdata maupun Islam (Faraid), serta penyusunan akta hibah, wasiat, dan perjanjian harta bersama.
                    </p>
                    <div class="flex justify-center space-x-3 pt-6 border-t border-slate-200 mt-6">
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="mail" class="w-4 h-4"></i></a>
                    </div>
                </div>

                <!-- Team 3 -->
                <div class="bg-slate-50 border border-slate-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col h-full text-center p-6 fade-in">
                    <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-6 border-4 border-white shadow-inner">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=300&h=300&q=80" alt="Budi Santoso" class="w-full h-full object-cover">
                    </div>
                    <h3 class="font-serif text-xl font-bold text-primary">Budi Santoso, S.Psi., M.Si.</h3>
                    <span class="text-accent font-semibold text-xs uppercase tracking-wider block mt-1 mb-4">Mediator & Konselor Keluarga</span>
                    <p class="text-slate-500 text-xs leading-relaxed flex-grow">
                        Bersertifikat Mediator Mahkamah Agung, bertugas mendampingi keluarga dalam proses mediasi non-litigasi untuk menemukan solusi damai.
                    </p>
                    <div class="flex justify-center space-x-3 pt-6 border-t border-slate-200 mt-6">
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="linkedin" class="w-4 h-4"></i></a>
                        <a href="#" class="text-slate-400 hover:text-primary transition-colors"><i data-lucide="mail" class="w-4 h-4"></i></a>
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
                        <li><a href="{{ route('home') }}#layanan" class="hover:text-accent transition-colors">Layanan</a></li>
                        <li><a href="{{ route('artikel') }}" class="hover:text-accent transition-colors">Artikel</a></li>
                        <li><a href="{{ route('artikel', ['cat' => 'peraturan']) }}" class="hover:text-accent transition-colors">Peraturan</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-accent transition-colors">FAQ</a></li>
                        <li><a href="{{ route('home') }}#kontak" class="hover:text-accent transition-colors">Kontak</a></li>
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
                        <li><a href="{{ route('home') }}#kontak" class="hover:text-accent transition-colors">Mediasi Keluarga</a></li>
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
