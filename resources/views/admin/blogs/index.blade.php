<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Admin</title>
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
                <a href="{{ route('admin.blogs.index') }}" class="block px-4 py-2 rounded-lg bg-indigo-600 font-semibold">
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
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-slate-900">Blog Management</h2>
                <a href="{{ route('admin.blogs.create') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition font-semibold">
                    + Tambah Blog
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
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Judul</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Author</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Created</th>
                            <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $blog)
                            <tr class="border-b hover:bg-slate-50">
                                <td class="px-6 py-4">
                                    <div class="font-semibold text-slate-900">{{ $blog->title }}</div>
                                    <div class="text-sm text-slate-500">{{ Str::limit($blog->excerpt, 50) }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-sm text-slate-700">{{ $blog->author }}</span>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500">
                                    {{ $blog->created_at->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600 hover:underline text-sm mr-4">Edit</a>
                                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                                    Belum ada blog. <a href="{{ route('admin.blogs.create') }}" class="text-blue-600 hover:underline">Tambah sekarang</a>
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
