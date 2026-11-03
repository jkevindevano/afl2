<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::getAll();

        foreach ($products as $index => $product) {
            $products[$index]['whatsapp'] = Product::whatsappLink($product['name']);
        }

        return view('product', ['products' => $products]);
    }
}
