<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Website E-Commerce Toko Online',
            'slug' => 'website-e-commerce-toko-online',
            'description' => 'Website toko online lengkap dengan sistem keranjang belanja, pembayaran online via Midtrans, dashboard admin, dan integrasi WhatsApp untuk customer service.',
            'image' => null,
            'link' => 'https://tokoonline-demo.com',
            'category' => 'web',
        ]);

        Portfolio::create([
            'title' => 'Aplikasi Mobile Banking',
            'slug' => 'aplikasi-mobile-banking',
            'description' => 'Aplikasi Android untuk mobile banking dengan fitur transfer, cek saldo, mutasi rekening, dan QR payment. Terintegrasi dengan API backend Laravel.',
            'image' => null,
            'link' => 'https://play.google.com/store/apps/details?id=com.mobilebanking',
            'category' => 'android',
        ]);

        Portfolio::create([
            'title' => 'Sistem Manajemen Sekolah',
            'slug' => 'sistem-manajemen-sekolah',
            'description' => 'Platform web untuk manajemen sekolah dengan fitur absensi siswa, nilai rapor, jadwal pelajaran, dan portal orang tua. Menggunakan Laravel dan MySQL.',
            'image' => null,
            'link' => 'https://sekolah-demo.com',
            'category' => 'web',
        ]);

        Portfolio::create([
            'title' => 'Aplikasi Delivery Food',
            'slug' => 'aplikasi-delivery-food',
            'description' => 'Aplikasi Android untuk pemesanan makanan dengan fitur tracking real-time, payment gateway, dan notifikasi push. Backend API dengan Laravel.',
            'image' => null,
            'link' => 'https://play.google.com/store/apps/details?id=com.deliveryfood',
            'category' => 'android',
        ]);

        Portfolio::create([
            'title' => 'Website Company Profile',
            'slug' => 'website-company-profile',
            'description' => 'Website company profile responsif dengan CMS admin panel, galeri produk, blog perusahaan, dan form kontak. Dibangun dengan Laravel dan Tailwind CSS.',
            'image' => null,
            'link' => 'https://company-profile-demo.com',
            'category' => 'web',
        ]);
    }
}