<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::getAll();
        return view('testimoni', ['testimonials' => $testimonials,]);
    }
}
