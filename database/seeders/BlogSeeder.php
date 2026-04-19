<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Mengapa Memilih Laravel untuk Pengembangan Web Modern',
            'slug' => 'mengapa-memilih-laravel-untuk-pengembangan-web-modern',
            'content' => '<p>Laravel telah menjadi framework PHP paling populer untuk pengembangan web modern. Artikel ini akan membahas mengapa Laravel menjadi pilihan utama developer di seluruh dunia.</p>

<h2>1. Sintaks yang Elegan dan Mudah Dipahami</h2>
<p>Laravel menawarkan sintaks yang clean dan expressive, membuat kode lebih readable dan maintainable. Fitur seperti Eloquent ORM membuat interaksi dengan database menjadi sangat intuitif.</p>

<h2>2. Built-in Security Features</h2>
<p>Laravel dilengkapi dengan fitur keamanan seperti CSRF protection, SQL injection prevention, dan secure authentication system out of the box.</p>

<h2>3. Rich Ecosystem</h2>
<p>Dengan ribuan package dan library yang tersedia melalui Composer, Laravel memiliki ekosistem yang sangat kaya untuk mempercepat development.</p>

<h2>4. Performance Optimization</h2>
<p>Laravel menyediakan berbagai tools untuk optimasi performa seperti caching, queue system, dan database optimization.</p>

<p>Dengan semua keunggulan ini, Laravel menjadi framework ideal untuk membangun aplikasi web yang scalable dan maintainable.</p>',
            'image' => null,
            'author' => 'JasaWebAnd Team',
            'excerpt' => 'Pelajari mengapa Laravel menjadi framework PHP terpopuler dan pilihan utama untuk pengembangan web modern.',
        ]);

        Blog::create([
            'title' => 'Panduan Lengkap Pengembangan Aplikasi Android dengan Kotlin',
            'slug' => 'panduan-lengkap-pengembangan-aplikasi-android-dengan-kotlin',
            'content' => '<p>Kotlin telah menjadi bahasa pemrograman resmi untuk pengembangan Android. Artikel ini akan membahas langkah-langkah praktis untuk mengembangkan aplikasi Android modern menggunakan Kotlin.</p>

<h2>1. Setup Development Environment</h2>
<p>Install Android Studio, JDK, dan SDK Android. Konfigurasi emulator untuk testing aplikasi.</p>

<h2>2. Arsitektur MVVM dengan ViewModel</h2>
<p>Implementasi arsitektur MVVM menggunakan Android Architecture Components untuk aplikasi yang maintainable.</p>

<h2>3. UI Development dengan Jetpack Compose</h2>
<p>Membangun interface yang modern dan responsif menggunakan Jetpack Compose, framework UI deklaratif dari Google.</p>

<h2>4. Integrasi dengan Backend API</h2>
<p>Menggunakan Retrofit dan OkHttp untuk komunikasi dengan REST API Laravel backend.</p>

<h2>5. State Management</h2>
<p>Menggunakan StateFlow dan LiveData untuk manajemen state yang efisien dalam aplikasi.</p>

<p>Dengan mengikuti panduan ini, Anda akan dapat mengembangkan aplikasi Android yang modern, performant, dan user-friendly.</p>',
            'image' => null,
            'author' => 'JasaWebAnd Team',
            'excerpt' => 'Panduan komprehensif untuk mengembangkan aplikasi Android modern menggunakan Kotlin dan teknologi terkini.',
        ]);

        Blog::create([
            'title' => 'Integrasi Laravel API dengan Aplikasi Android',
            'slug' => 'integrasi-laravel-api-dengan-aplikasi-android',
            'content' => '<p>Integrasi antara backend Laravel dan aplikasi Android adalah kunci untuk membangun aplikasi mobile yang powerful. Artikel ini akan membahas best practices untuk integrasi API.</p>

<h2>1. Desain API yang RESTful</h2>
<p>Membuat API endpoints yang konsisten dan mudah dipahami menggunakan Laravel Resource dan API Resource.</p>

<h2>2. Authentication dengan JWT</h2>
<p>Implementasi autentikasi aman menggunakan JSON Web Tokens untuk komunikasi antara mobile app dan server.</p>

<h2>3. Data Serialization</h2>
<p>Menggunakan Laravel API Resources untuk format data yang konsisten dan optimal untuk mobile consumption.</p>

<h2>4. Error Handling</h2>
<p>Implementasi proper error handling dan response format yang informatif untuk debugging.</p>

<h2>5. Rate Limiting</h2>
<p>Menerapkan rate limiting untuk mencegah abuse dan memastikan performa server tetap optimal.</p>

<h2>6. Testing API</h2>
<p>Menggunakan tools seperti Postman dan Laravel Dusk untuk testing API endpoints secara menyeluruh.</p>

<p>Dengan integrasi yang baik, aplikasi Android Anda akan memiliki backend yang reliable dan scalable.</p>',
            'image' => null,
            'author' => 'JasaWebAnd Team',
            'excerpt' => 'Pelajari cara mengintegrasikan Laravel API dengan aplikasi Android untuk pengalaman mobile yang seamless.',
        ]);

        Blog::create([
            'title' => 'Optimasi Performa Aplikasi Laravel untuk Production',
            'slug' => 'optimasi-performa-aplikasi-laravel-untuk-production',
            'content' => '<p>Optimasi performa adalah aspek kritis dalam deployment aplikasi Laravel ke production. Artikel ini akan membahas berbagai teknik optimasi yang dapat diterapkan.</p>

<h2>1. Database Optimization</h2>
<p>Menggunakan indexing yang tepat, query optimization dengan Eloquent, dan implementasi database caching.</p>

<h2>2. Application Caching</h2>
<p>Implementasi berbagai level caching: view caching, route caching, config caching, dan application caching.</p>

<h2>3. Asset Optimization</h2>
<p>Minifikasi dan kompresi CSS/JavaScript, optimasi gambar, dan penggunaan CDN untuk distribusi asset.</p>

<h2>4. Server Configuration</h2>
<p>Konfigurasi PHP-FPM, Nginx/Apache optimization, dan implementasi OPcache untuk performa maksimal.</p>

<h2>5. Queue System</h2>
<p>Menggunakan Laravel Queue untuk menjalankan task berat secara asynchronous dan meningkatkan response time.</p>

<h2>6. Monitoring dan Profiling</h2>
<p>Implementasi monitoring tools seperti Laravel Telescope dan profiling dengan Blackfire untuk identifikasi bottleneck.</p>

<p>Dengan optimasi yang tepat, aplikasi Laravel Anda akan mampu menangani traffic tinggi dengan performa yang excellent.</p>',
            'image' => null,
            'author' => 'JasaWebAnd Team',
            'excerpt' => 'Teknik-teknik optimasi performa Laravel untuk memastikan aplikasi berjalan optimal di environment production.',
        ]);
    }
}