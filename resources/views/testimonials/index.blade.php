<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni - Jasa Web & Android</title>
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
                    <a href="/portfolios" class="text-slate-600 hover:text-blue-600 transition-colors">Portfolio</a>
                    <a href="/blogs" class="text-slate-600 hover:text-blue-600 transition-colors">Blog</a>
                    <a href="/testimonials" class="text-blue-600 font-medium">Testimoni</a>
                    <a href="#kontak" class="text-slate-600 hover:text-blue-600 transition-colors">Kontak</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-24 px-6 bg-linear-to-br from-blue-50 to-indigo-100">
        <div class="container mx-auto max-w-6xl text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-6">
                Testimoni Klien
            </h1>
            <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                Apa kata klien kami tentang pengalaman bekerja sama dengan JasaWebAnd
            </p>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-24 px-6">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($testimonials as $testimonial)
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $testimonial->rating)
                                <i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-current"></i>
                            @else
                                <i data-lucide="star" class="w-5 h-5 text-slate-300"></i>
                            @endif
                        @endfor
                    </div>
                    <blockquote class="text-slate-600 mb-6 italic">
                        "{{ $testimonial->message }}"
                    </blockquote>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-slate-200 rounded-full flex items-center justify-center mr-4">
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-12 h-12 rounded-full object-cover">
                            @else
                                <i data-lucide="user" class="w-6 h-6 text-slate-400"></i>
                            @endif
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">{{ $testimonial->name }}</h4>
                            <p class="text-sm text-slate-500">{{ $testimonial->position }}</p>
                            @if($testimonial->company)
                            <p class="text-sm text-slate-500">{{ $testimonial->company }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <i data-lucide="message-square" class="w-16 h-16 text-slate-400 mx-auto mb-4"></i>
                    <h3 class="text-xl font-semibold text-slate-600 mb-2">Belum ada testimoni</h3>
                    <p class="text-slate-500">Testimoni klien akan segera ditambahkan.</p>
                </div>
                @endforelse
            </div>
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