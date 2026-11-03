<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Testimonial::create([
            'name' => 'John Doe',
            'testimonial' => 'This product exceeded my expectations! Highly recommend it to everyone.',
        ]);

        Testimonial::create([
            'name' => 'Jane Smith',
            'testimonial' => 'Amazing quality and fast shipping. I will definitely buy again!',
        ]);

        Testimonial::create([
            'name' => 'Michael Johnson',
            'testimonial' => 'Customer service was excellent. They helped me with all my questions.',
        ]);

    }
}
