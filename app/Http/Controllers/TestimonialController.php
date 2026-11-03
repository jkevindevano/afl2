<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(): View
    {
    
        $testimonials = Testimonial::all(); 

        return view('testimoni', [
            'testimonials' => $testimonials
        ]);
    }
}
