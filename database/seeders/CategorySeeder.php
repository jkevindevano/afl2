<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'pakaian',
                
            ],
            
        ];

        // Memasukkan data ke tabel categories
        DB::table('categories')->insert($categories);
    }
}
