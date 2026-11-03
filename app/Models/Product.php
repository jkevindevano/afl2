<?php

namespace App\Models;

class Product
{
    /**
     * Daftar produk yang ada di halaman Product.
     *
     * @return array<int, array{name: string, category: string, image: string, description: string}>
     */
    public static function getAll(): array
    {
        return [
            [
                'name' => 'Arsenal Varsity Jacket',
                'category' => 'Football Merchandise',
                'image' => 'jaketarsenal.jpg',
                'description' => 'A maroon wool varsity jacket from Arsenal\'s official merchandise collection. It features the Arsenal crest on the chest and "Est. 1886 Arsenal Football Club North London" embroidery. Cream sleeve stripes and ribbed cuffs complete its classic college look.',
            ],
            [
                'name' => 'Lancôme Hypnôse Mascara',
                'category' => 'Beauty',
                'image' => 'Lancome.jpg',
                'description' => 'Lancôme Hypnôse Serum-Infused Volumizing Mascara in an 8 ml tube. It builds full, sculpted volume while the serum formula helps care for your lashes. An authentic Lancôme product, bought first hand in the UK.',
            ],
            [
                'name' => 'Linzi Embellished Sandals',
                'category' => 'Footwear',
                'image' => 'sendal.jpg',
                'description' => 'Nude flat slider sandals from UK footwear brand Linzi. The crossover straps are covered in pearl and rhinestone details that catch the light. Comfortable for daily wear, yet dressy enough for special occasions.',
            ],
            [
                'name' => 'Anya Hindmarch Universal Bag',
                'category' => 'Bags',
                'image' => 'tas.jpg',
                'description' => 'The Universal Bag from London designer Anya Hindmarch, shown in brown in two sizes. It has striped blue and cream handles and the brand\'s signature smiley-eyes logo. Made from recycled materials, it is a sturdy tote for shopping or travel.',
            ],
            [
                'name' => 'BrüMate Era Tumbler',
                'category' => 'Drinkware',
                'image' => 'tumbler.png',
                'description' => 'An insulated BrüMate Era tumbler with a shimmering purple-blue finish. It comes with a straw lid and a comfortable handle for drinks on the go. Keeps your drinks cold or hot for hours.',
            ],
        ];
    }
    
    public static function whatsappLink(string $productName): string
    {
        $message = 'Halo Kak Evaa, saya mau tanya tentang '.$productName;

        return config('services.whatsapp.url').'?text='.rawurlencode($message);
    }
}
