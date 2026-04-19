<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    if (! auth()->check()) {
        return redirect()->route('login');
    }

    return view('welcome');
});

// Public Routes
Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
Route::get('/portfolios/{slug}', [PortfolioController::class, 'show'])->name('portfolios.show');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');

Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }

    return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Routes
    Route::prefix('admin')->middleware(\App\Http\Middleware\EnsureUserIsAdmin::class)->group(function () {
        // Dashboard
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // Portfolio CRUD
        Route::resource('portfolios', AdminPortfolioController::class, ['names' => 'admin.portfolios']);
        
        // Blog CRUD
        Route::resource('blogs', AdminBlogController::class, ['names' => 'admin.blogs']);
        
        // Testimonial CRUD
        Route::resource('testimonials', AdminTestimonialController::class, ['names' => 'admin.testimonials']);
    });
});

require __DIR__.'/auth.php';
