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
                'text' => 'Pelayanan sangat cepat dan hasil website sangat memuaskan!',
            ],
            [
                'name_customer' => 'Siti Rahma',
                'text' => 'Sangat profesional, fiturnya lengkap dan mudah digunakan.',
            ],
            [
                'name_customer' => 'John Doe',
                'text' => 'This product exceeded my expectations! Highly recommend it to everyone.',
            ],
            [
                'name_customer' => 'Jane Smith',
                'text' => 'Amazing quality and fast shipping. I will definitely buy again!',
            ],
            [
                'name_customer' => 'Michael Johnson',
                'text' => 'Customer service was excellent. They helped me with all my questions.',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
