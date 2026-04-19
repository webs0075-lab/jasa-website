<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold mb-2">Selamat datang, {{ Auth::user()->name }}!</h3>
                    <p class="text-sm text-gray-600">Ini adalah halaman dashboard user Anda. Di sini Anda dapat mengelola profil dan melihat konten terbaru.</p>
                </div>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold mb-2">Profil</h4>
                    <p class="text-sm text-gray-600">Perbarui informasi akun, ganti password, dan kelola detail kontak Anda.</p>
                    <a href="{{ route('profile.edit') }}" class="mt-4 inline-block text-blue-600 hover:underline">Buka Profil</a>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold mb-2">Portofolio</h4>
                    <p class="text-sm text-gray-600">Lihat daftar portofolio yang tersedia di website.</p>
                    <a href="{{ route('portfolios.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat Portofolio</a>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h4 class="text-lg font-semibold mb-2">Blog & Testimonial</h4>
                    <p class="text-sm text-gray-600">Jelajahi artikel terbaru dan testimoni pelanggan.</p>
                    <div class="mt-4 space-x-4">
                        <a href="{{ route('blogs.index') }}" class="text-blue-600 hover:underline">Blog</a>
                        <a href="{{ route('testimonials.index') }}" class="text-blue-600 hover:underline">Testimonial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
