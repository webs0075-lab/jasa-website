<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Portfolio - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6">
            <div class="mb-8">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <p class="text-slate-400 text-sm">Jasa Web & Android</p>
            </div>
            
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="layout-dashboard" class="w-5 h-5 inline mr-2"></i> Dashboard
                </a>
                <a href="{{ route('admin.portfolios.index') }}" class="block px-4 py-2 rounded-lg bg-blue-600 font-semibold">
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
                    <i data-lucide="arrow-left" class="w-5 h-5 inline mr-2"></i> Kembali
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-8">Tambah Portfolio Baru</h2>

            <div class="bg-white rounded-lg shadow p-6 max-w-2xl">
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Judul Portfolio</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Deskripsi</label>
                        <textarea name="description" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600" required>{{ old('description') }}</textarea>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-900 mb-2">Kategori</label>
                            <select name="category" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="web" {{ old('category') == 'web' ? 'selected' : '' }}>Web</option>
                                <option value="android" {{ old('category') == 'android' ? 'selected' : '' }}>Android</option>
                                <option value="api" {{ old('category') == 'api' ? 'selected' : '' }}>API</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-900 mb-2">Link (Opsional)</label>
                            <input type="url" name="link" value="{{ old('link') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-600">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Gambar (Opsional)</label>
                        <input type="file" name="image" class="w-full px-4 py-2 border rounded-lg" accept="image/*">
                        <p class="text-xs text-slate-500 mt-1">JPG, PNG, GIF max 2MB</p>
                    </div>

                    <div class="flex gap-4 pt-4">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 font-semibold">
                            Simpan Portfolio
                        </button>
                        <a href="{{ route('admin.portfolios.index') }}" class="bg-slate-300 text-slate-900 px-6 py-2 rounded-lg hover:bg-slate-400 font-semibold">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
