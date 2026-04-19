<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Testimonial - Admin</title>
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
                <a href="{{ route('admin.portfolios.index') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="briefcase" class="w-5 h-5 inline mr-2"></i> Portfolio
                </a>
                <a href="{{ route('admin.blogs.index') }}" class="block px-4 py-2 rounded-lg hover:bg-slate-800 transition">
                    <i data-lucide="newspaper" class="w-5 h-5 inline mr-2"></i> Blog
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="block px-4 py-2 rounded-lg bg-emerald-600 font-semibold">
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
            <h2 class="text-3xl font-bold text-slate-900 mb-8">Tambah Testimonial Baru</h2>

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

                <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-900 mb-2">Nama</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-emerald-600" required>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-900 mb-2">Posisi</label>
                            <input type="text" name="position" value="{{ old('position') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-emerald-600" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Perusahaan</label>
                        <input type="text" name="company" value="{{ old('company') }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-emerald-600" required>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Pesan/Testimoni</label>
                        <textarea name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-emerald-600" required>{{ old('message') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Rating</label>
                        <select name="rating" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-emerald-600" required>
                            <option value="">-- Pilih Rating --</option>
                            <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ 5 Bintang</option>
                            <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ 4 Bintang</option>
                            <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>⭐⭐⭐ 3 Bintang</option>
                            <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>⭐⭐ 2 Bintang</option>
                            <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>⭐ 1 Bintang</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-900 mb-2">Foto (Opsional)</label>
                        <input type="file" name="image" class="w-full px-4 py-2 border rounded-lg" accept="image/*">
                        <p class="text-xs text-slate-500 mt-1">JPG, PNG, GIF max 2MB</p>
                    </div>

                    <div class="flex gap-4 pt-4">
                        <button type="submit" class="bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 font-semibold">
                            Simpan Testimonial
                        </button>
                        <a href="{{ route('admin.testimonials.index') }}" class="bg-slate-300 text-slate-900 px-6 py-2 rounded-lg hover:bg-slate-400 font-semibold">
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
