<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
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
