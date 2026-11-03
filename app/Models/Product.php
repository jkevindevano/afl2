<?php

namespace App\Models;

class Product
{
    protected $fillable = [
        'name',
        'category',
        'image',
        'description',
    ];
    public static function getAll()
    {
        return self::all();
    }
    
    public static function whatsappLink(string $productName): string
    {
        $message = 'Halo Kak Evaa, saya mau tanya tentang '.$productName;

        return config('services.whatsapp.url').'?text='.rawurlencode($message);
    }
}
