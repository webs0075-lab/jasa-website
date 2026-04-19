<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jasa Pembuatan Web & Android - Laravel Version</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        .glass-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #f1f5f9;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f8faff 0%, #ffffff 100%);
        }
        .wa-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: white;
            padding: 15px;
            border-radius: 50px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .wa-float:hover {
            transform: scale(1.1) translateY(-5px);
        }
        .logo-box {
            background: white;
            padding: 4px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="antialiased text-slate-800 bg-white">

    <!-- Header -->
    <header class="fixed w-full z-50 glass-header">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="logo-box">
                    <!-- Logo -->
                    <img src="{{ asset('logo.png') }}" 
                         alt="Logo Jasa Web Android" 
                         class="w-[45px] h-[45px] object-contain"
                         onerror="this.src='https://via.placeholder.com/50?text=Logo'">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-xl tracking-tight text-slate-900 leading-none">Jasa Web & Android</span>
                    <span class="text-[10px] text-blue-600 font-bold uppercase tracking-[0.2em] mt-1">Laravel Specialist</span>
                </div>
            </div>
            
            <nav class="hidden md:flex gap-8 font-semibold text-sm text-slate-600">
                <a href="#beranda" class="hover:text-blue-600 transition">Beranda</a>
                <a href="#layanan" class="hover:text-blue-600 transition">Layanan</a>
                <a href="#harga" class="hover:text-blue-600 transition">Harga</a>
                <a href="#kontak" class="hover:text-blue-600 transition">Kontak</a>
            </nav>

            <div class="hidden md:flex items-center gap-3">
                @guest
                    <a href="{{ route('login') }}" class="text-slate-700 hover:text-blue-600 font-semibold">Login</a>
                    <a href="{{ route('register') }}" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-xl font-semibold hover:bg-blue-50 transition">Daftar</a>
                @else
                    <a href="{{ url('/') }}" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-xl font-semibold hover:bg-blue-50 transition">Beranda</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-white text-slate-700 px-4 py-2 rounded-xl font-semibold hover:bg-slate-100 transition">Logout</button>
                    </form>
                @endguest
                <a href="https://wa.me/6281252851561" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-700 shadow-lg shadow-blue-200 transition">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="pt-48 pb-24 px-6 hero-gradient">
        <div class="container mx-auto max-w-6xl">
            <div class="grid gap-10 lg:grid-cols-2 items-center">
                <div class="text-center lg:text-left">
                    @auth
                        <p class="text-sm text-blue-600 uppercase font-semibold tracking-[0.3em] mb-4">Selamat datang, {{ Auth::user()->name }}!</p>
                    @endauth
                    <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold mb-8 border border-blue-100 uppercase tracking-widest">
                        <i data-lucide="award" class="w-3 h-3"></i> Premium Development Service
                    </div>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
                        Membangun Website Profesional dan <span class="text-blue-600">Aplikasi Android</span>
                    </h1>
                    <p class="text-lg text-slate-500 mb-8 max-w-2xl leading-relaxed">
                        Jasa pengembangan web dan aplikasi mobile dengan backend Laravel yang aman, responsif, dan siap produksi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('portfolios.index') }}" class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center justify-center gap-2">
                            Lihat Portofolio
                        </a>
                        <a href="https://wa.me/6281252851561" class="border border-slate-200 text-slate-800 px-8 py-4 rounded-2xl font-bold hover:border-blue-400 hover:text-blue-600 transition text-center">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-[2rem] bg-white p-8 shadow-2xl shadow-slate-200 border border-slate-100">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-sm text-slate-500">Nama Akun</p>
                                <h2 class="text-2xl font-bold text-slate-900">{{ Auth::user()->name }}</h2>
                            </div>
                            <div class="bg-blue-600 text-white rounded-2xl px-4 py-2 text-sm font-semibold">Terverifikasi</div>
                        </div>
                        <div class="space-y-4">
                            <div class="p-4 rounded-3xl bg-slate-50">
                                <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Status</p>
                                <p class="text-lg font-semibold text-slate-900">Pengguna Aktif</p>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="p-4 rounded-3xl bg-slate-900 text-white">
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-300">Project</p>
                                    <p class="text-2xl font-bold">12</p>
                                </div>
                                <div class="p-4 rounded-3xl bg-slate-50 border border-slate-200">
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Response</p>
                                    <p class="text-2xl font-bold text-slate-900">24H</p>
                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <a href="{{ route('portfolios.index') }}" class="inline-flex items-center justify-center rounded-2xl bg-blue-600 text-white py-3 font-semibold hover:bg-blue-700 transition">
                                    Lihat Portofolio
                                </a>
                                @if(Auth::user()->is_admin)
                                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 text-slate-900 py-3 font-semibold hover:bg-slate-100 transition">
                                        Admin Panel
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-10 right-0 w-48 h-48 rounded-full bg-blue-100 blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 px-6 bg-slate-50">
        <div class="container mx-auto max-w-6xl">
            <div class="grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 mb-4 rounded-2xl bg-blue-50 text-blue-600">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Keamanan Terjamin</h3>
                    <p class="text-slate-500 text-sm">Backend Laravel membuat sistem Anda kuat, terstruktur, dan siap aman untuk produksi.</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 mb-4 rounded-2xl bg-blue-50 text-blue-600">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Desain Modern</h3>
                    <p class="text-slate-500 text-sm">Tampilan bersih, responsif, dan menarik untuk pengguna desktop maupun mobile.</p>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-slate-200">
                    <div class="inline-flex items-center justify-center w-12 h-12 mb-4 rounded-2xl bg-blue-50 text-blue-600">
                        <i data-lucide="phone" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Integrasi API</h3>
                    <p class="text-slate-500 text-sm">Koneksikan aplikasi Android Anda dengan backend Laravel untuk pengalaman penuh fitur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Ringkas -->
    <section id="layanan" class="py-24 px-6 bg-white">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-3 gap-12">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="code-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Custom Web Laravel</h3>
                    <p class="text-slate-500 text-sm">Sistem internal, e-commerce, atau landing page dengan arsitektur Laravel yang rapi.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="smartphone" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Android Development</h3>
                    <p class="text-slate-500 text-sm">Aplikasi mobile native atau hybrid yang terintegrasi penuh dengan API backend.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="database" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">API Integration</h3>
                    <p class="text-slate-500 text-sm">Menghubungkan berbagai platform Anda dalam satu ekosistem data yang sinkron.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="harga" class="py-24 px-6 bg-slate-50">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">Paket Harga Kami</h2>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Basic -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200 hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold mb-2">Web Landing Page</h3>
                    <p class="text-slate-500 text-sm mb-6">Untuk startup dan UMKM</p>
                    <div class="text-4xl font-bold text-blue-600 mb-8">Mulai dari <span class="text-2xl">Rp 5jt</span></div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> Responsive Design</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> SEO Optimized</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> Contact Form</li>
                        <li class="flex items-center gap-2"><i data-lucide="x" class="w-5 h-5 text-slate-300"></i> Admin Panel</li>
                    </ul>
                    <a href="https://wa.me/6281252851561" class="w-full bg-slate-900 text-white py-3 rounded-xl font-bold hover:bg-slate-800 transition">Konsultasi</a>
                </div>

                <!-- Standard -->
                <div class="bg-blue-600 text-white rounded-2xl p-8 shadow-2xl shadow-blue-200 scale-105 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-yellow-400 text-slate-900 px-4 py-1 rounded-full text-xs font-bold">POPULER</div>
                    <h3 class="text-2xl font-bold mb-2">Web Aplikasi</h3>
                    <p class="text-blue-100 text-sm mb-6">Untuk bisnis medium</p>
                    <div class="text-4xl font-bold mb-8">Mulai dari <span class="text-2xl">Rp 15jt</span></div>
                    <ul class="space-y-4 mb-8 text-sm text-blue-100">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-blue-200"></i> Custom Features</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-blue-200"></i> Database Integration</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-blue-200"></i> Admin Panel</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-blue-200"></i> 3 Bulan Support</li>
                    </ul>
                    <a href="https://wa.me/6281252851561" class="w-full bg-white text-blue-600 py-3 rounded-xl font-bold hover:bg-blue-50 transition">Konsultasi</a>
                </div>

                <!-- Enterprise -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200 hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold mb-2">Android App</h3>
                    <p class="text-slate-500 text-sm mb-6">Untuk scale-up & enterprise</p>
                    <div class="text-4xl font-bold text-blue-600 mb-8">Mulai dari <span class="text-2xl">Rp 25jt</span></div>
                    <ul class="space-y-4 mb-8 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> Native Development</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> API Backend</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> Firebase Integration</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-5 h-5 text-green-500"></i> 6 Bulan Support</li>
                    </ul>
                    <a href="https://wa.me/6281252851561" class="w-full bg-slate-900 text-white py-3 rounded-xl font-bold hover:bg-slate-800 transition">Konsultasi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-24 px-6 bg-white">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">Hubungi Kami</h2>
                <p class="text-lg text-slate-500">Siap membantu mewujudkan visi digital Anda</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <i data-lucide="phone" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">WhatsApp</h4>
                            <a href="https://wa.me/6281252851561" class="text-blue-600 hover:underline">+62 812-5285-1561</a>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Email</h4>
                            <a href="mailto:info@jasaweband.com" class="text-blue-600 hover:underline">info@jasaweband.com</a>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">Lokasi</h4>
                            <p class="text-slate-500">West Papua</p>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="bg-slate-50 p-8 rounded-2xl">
                    <form class="space-y-4" action="https://wa.me/6281252851561" method="GET" target="_blank">
                        <input type="text" placeholder="Nama Anda" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-600 focus:outline-none" name="text">
                        <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-600 focus:outline-none">
                        <textarea placeholder="Pesan" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-600 focus:outline-none"></textarea>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold hover:bg-blue-700 transition">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-6 bg-slate-50 border-t border-slate-200">
        <div class="container mx-auto text-center">
            <div class="flex items-center gap-3 justify-center mb-6">
                <img src="{{ asset('logo.png') }}" 
                     alt="Logo Footer" 
                     class="w-10 h-10 object-contain grayscale opacity-50"
                     onerror="this.src='https://via.placeholder.com/40'">
                <span class="font-bold text-slate-400 uppercase tracking-widest text-xs">Jasa Web & Android</span>
            </div>
            <p class="text-slate-400 text-xs">© {{ date('Y') }} Build with Laravel. All rights reserved.</p>
        </div>
    </footer>

    <!-- WhatsApp Floating -->
    <a href="https://wa.me/6281252851561" class="wa-float" target="_blank">
        <i data-lucide="message-circle" class="w-7 h-7"></i>
    </a>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
