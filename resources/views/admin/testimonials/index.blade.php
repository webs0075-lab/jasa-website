<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial - Admin</title>
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
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-slate-900">Testimonial Management</h2>
                <a href="{{ route('admin.testimonials.create') }}" class="bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition font-semibold">
                    + Tambah Testimonial
                </a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-lg shadow overflow-hidden">
                <table class="w-full">
                    <thead class="bg-slate-100 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Nama</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Posisi</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Rating</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $testimonial)
                            <tr class="border-b hover:bg-slate-50">
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-900">{{ $testimonial->name }}</div>
                                    <div class="text-sm text-slate-500">{{ $testimonial->company }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-slate-700">{{ $testimonial->position }}</span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1">
                                        @for ($i = 0; $i < $testimonial->rating; $i++)
                                            <i data-lucide="star" class="w-4 h-4 fill-yellow-400 text-yellow-400"></i>
                                        @endfor
                                        <span class="text-sm text-slate-500 ml-1">({{ $testimonial->rating }}/5)</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-600 hover:underline text-sm mr-4">Edit</a>
                                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                                    Belum ada testimonial. <a href="{{ route('admin.testimonials.create') }}" class="text-blue-600 hover:underline">Tambah sekarang</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
