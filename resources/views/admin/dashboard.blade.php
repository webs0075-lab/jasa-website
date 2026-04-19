<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50">
    <!-- Sidebar Navigation -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6">
            <div class="mb-8">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <p class="text-slate-400 text-sm">Jasa Web & Android</p>
            </div>
            
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-lg bg-blue-600 font-semibold">
                    <i data-lucide="layout-dashboard" class="w-5 h-5 inline mr-2"></i> Dashboard
                </a>
                <a href="{{ route('admin.portfolios.index') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="briefcase" class="w-5 h-5 inline mr-2"></i> Portfolio
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="newspaper" class="w-5 h-5 inline mr-2"></i> Blog
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="star" class="w-5 h-5 inline mr-2"></i> Testimonial
                </a>
            </nav>

            <div class="mt-auto pt-8 border-t border-slate-700">
                <a href="/" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition text-slate-400">
                    <i data-lucide="arrow-left" class="w-5 h-5 inline mr-2"></i> Kembali ke Website
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-8">Dashboard</h2>

            <!-- Stats Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <!-- Portfolio Card -->
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-600">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-slate-500 text-sm">Total Portfolio</p>
                            <p class="text-4xl font-bold text-slate-900">{{ $portfolioCount }}</p>
                        </div>
                        <i data-lucide="briefcase" class="w-12 h-12 text-blue-600 opacity-20"></i>
                    </div>
                    <a href="{{ route('admin.portfolios.index') }}" class="text-blue-600 hover:underline text-sm mt-4 block">Lihat Portfolio →</a>
                </div>

                <!-- Blog Card -->
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-indigo-600">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-slate-500 text-sm">Total Blog</p>
                            <p class="text-4xl font-bold text-slate-900">{{ $blogCount }}</p>
                        </div>
                        <i data-lucide="newspaper" class="w-12 h-12 text-indigo-600 opacity-20"></i>
                    </div>
                    <a href="{{ route('admin.blogs.index') }}" class="text-indigo-600 hover:underline text-sm mt-4 block">Lihat Blog →</a>
                </div>

                <!-- Testimonial Card -->
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-emerald-600">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-slate-500 text-sm">Total Testimonial</p>
                            <p class="text-4xl font-bold text-slate-900">{{ $testimonialCount }}</p>
                        </div>
                        <i data-lucide="star" class="w-12 h-12 text-emerald-600 opacity-20"></i>
                    </div>
                    <a href="{{ route('admin.testimonials.index') }}" class="text-emerald-600 hover:underline text-sm mt-4 block">Lihat Testimonial →</a>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Aksi Cepat</h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <a href="{{ route('admin.portfolios.create') }}" class="bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 text-center font-semibold transition">
                        + Tambah Portfolio
                    </a>
                    <a href="{{ route('admin.blogs.create') }}" class="bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 text-center font-semibold transition">
                        + Tambah Blog
                    </a>
                    <a href="{{ route('admin.testimonials.create') }}" class="bg-emerald-600 text-white px-4 py-3 rounded-lg hover:bg-emerald-700 text-center font-semibold transition">
                        + Tambah Testimonial
                    </a>
                    <a href="/" class="bg-slate-600 text-white px-4 py-3 rounded-lg hover:bg-slate-700 text-center font-semibold transition">
                        Lihat Website
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
