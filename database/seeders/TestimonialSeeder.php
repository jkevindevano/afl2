<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $testimonials = [
            [
                'name' => 'Budi Santoso',
                'text' => 'Pelayanan sangat cepat dan hasil website sangat memuaskan!',
            ],
            [
                'name' => 'Siti Rahma',
                'text' => 'Sangat profesional, fiturnya lengkap dan mudah digunakan.',
            ],
            [
                'name' => 'John Doe',
                'testimonial' => 'This product exceeded my expectations! Highly recommend it to everyone.',
            ],
            [
                'name' => 'Jane Smith',
                'testimonial' => 'Amazing quality and fast shipping. I will definitely buy again!',
            ],
            [
                'name' => 'Michael Johnson',
                'testimonial' => 'Customer service was excellent. They helped me with all my questions.',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
