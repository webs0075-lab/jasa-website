<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }} - Portfolio - Jasa Web & Android</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="font-['Inter'] bg-slate-50">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-slate-900">JasaWebAnd</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-slate-600 hover:text-blue-600 transition-colors">Beranda</a>
                    <a href="/portfolios" class="text-blue-600 font-medium">Portfolio</a>
                    <a href="/blogs" class="text-slate-600 hover:text-blue-600 transition-colors">Blog</a>
                    <a href="/testimonials" class="text-slate-600 hover:text-blue-600 transition-colors">Testimoni</a>
                    <a href="#kontak" class="text-slate-600 hover:text-blue-600 transition-colors">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-24 px-6 bg-linear-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center">
                <span class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-full mb-4">
                    {{ ucfirst($portfolio->category) }}
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">
                    {{ $portfolio->title }}
                </h1>
                <p class="text-xl text-slate-600">
                    {{ $portfolio->description }}
                </p>
                @if($portfolio->link)
                <div class="mt-8">
                    <a href="{{ $portfolio->link }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                        <i data-lucide="external-link" class="w-5 h-5 mr-2"></i>
                        Kunjungi Proyek
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Portfolio Image -->
    @if($portfolio->image)
    <section class="py-12 px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-auto">
            </div>
        </div>
    </section>
    @endif

    <!-- Back to Portfolio -->
    <section class="py-12 px-6">
        <div class="container mx-auto max-w-6xl text-center">
            <a href="{{ route('portfolios.index') }}" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                Kembali ke Portfolio
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-12 px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">JasaWebAnd</h4>
                    <p class="text-slate-400">Solusi digital terpercaya untuk bisnis Anda.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" class="hover:text-white transition-colors">Website</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Aplikasi Android</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Development</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="/blogs" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="/portfolios" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="/testimonials" class="hover:text-white transition-colors">Testimoni</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="https://wa.me/6281252851561" class="hover:text-white transition-colors">WhatsApp</a></li>
                        <li><a href="mailto:info@jasaweband.com" class="hover:text-white transition-colors">Email</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-8 pt-8 text-center text-slate-400">
                <p>&copy; 2024 JasaWebAnd. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>