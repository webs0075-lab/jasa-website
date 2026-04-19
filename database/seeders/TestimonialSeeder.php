<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Ahmad Rahman',
            'position' => 'CEO',
            'company' => 'PT. Digital Nusantara',
            'message' => 'Website e-commerce yang dibangun JasaWebAnd sangat membantu bisnis kami berkembang. Fitur lengkap, performa cepat, dan support yang responsif. Recommended!',
            'image' => null,
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Siti Nurhaliza',
            'position' => 'Founder',
            'company' => 'Food Delivery App',
            'message' => 'Aplikasi Android yang dikembangkan sesuai dengan visi kami. Integrasi API Laravel berjalan lancar, UI/UX modern, dan fitur-fitur sesuai kebutuhan.',
            'image' => null,
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Budi Santoso',
            'position' => 'IT Manager',
            'company' => 'Sekolah Modern',
            'message' => 'Sistem manajemen sekolah yang dibuat sangat membantu administrasi sekolah kami. Mudah digunakan oleh guru dan orang tua siswa. Terima kasih tim JasaWebAnd!',
            'image' => null,
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Maya Sari',
            'position' => 'Marketing Director',
            'company' => 'CV. Creative Agency',
            'message' => 'Website company profile yang dibuat sangat profesional dan responsif. CMS admin panel memudahkan kami update konten sendiri. Hasilnya memuaskan!',
            'image' => null,
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Rudi Hartono',
            'position' => 'CTO',
            'company' => 'Startup Fintech',
            'message' => 'Aplikasi mobile banking yang dikembangkan aman dan reliable. Backend Laravel yang solid membuat sistem kami scalable untuk pertumbuhan bisnis.',
            'image' => null,
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Linda Wijaya',
            'position' => 'Operations Manager',
            'company' => 'Restoran Cepat Saji',
            'message' => 'Aplikasi delivery food yang dibuat membantu operasional restoran kami. Tracking real-time dan payment gateway terintegrasi dengan baik.',
            'image' => null,
            'rating' => 5,
        ]);
    }
}