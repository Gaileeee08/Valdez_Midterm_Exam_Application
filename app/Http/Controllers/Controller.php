<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Example theme: Gadgets
        $products = [
            ["name" => "iPhone 15 Pro", "price" => "₱70,000", "category" => "Smartphone"],
            ["name" => "MacBook Air M2", "price" => "₱80,000", "category" => "Laptop"],
            ["name" => "Samsung Galaxy S24", "price" => "₱65,000", "category" => "Smartphone"],
            ["name" => "Sony WH-1000XM5", "price" => "₱18,000", "category" => "Headphones"],
            ["name" => "Logitech MX Master 3", "price" => "₱6,500", "category" => "Mouse"],
        ];

        return view('products.index', compact('products'));
    }
}