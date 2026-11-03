<?php

namespace App\Models;

class Testimonial
{
    public static function getAll()
    {
        return [
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
    }
}