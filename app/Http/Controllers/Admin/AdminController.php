<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $portfolioCount = Portfolio::count();
        $blogCount = Blog::count();
        $testimonialCount = Testimonial::count();
        
        return view('admin.dashboard', [
            'portfolioCount' => $portfolioCount,
            'blogCount' => $blogCount,
            'testimonialCount' => $testimonialCount,
        ]);
    }
}
