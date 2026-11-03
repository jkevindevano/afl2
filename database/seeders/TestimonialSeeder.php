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
                'name_customer' => 'Budi Santoso',
                'testimonial' => 'Pelayanan sangat cepat dan hasil website sangat memuaskan!',
            ],
            [
                'name_customer' => 'Siti Rahma',
                'testimonial' => 'Sangat profesional, fiturnya lengkap dan mudah digunakan.',
            ],
            [
                'name_customer' => 'John Doe',
                'testimonial' => 'This product exceeded my expectations! Highly recommend it to everyone.',
            ],
            [
                'name_customer' => 'Jane Smith',
                'testimonial' => 'Amazing quality and fast shipping. I will definitely buy again!',
            ],
            [
                'name_customer' => 'Michael Johnson',
                'testimonial' => 'Customer service was excellent. They helped me with all my questions.',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
