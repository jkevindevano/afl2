<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TestimonialController extends Controller
{
    public function index(): View
    {
        return view('testimoni');
    }
}
