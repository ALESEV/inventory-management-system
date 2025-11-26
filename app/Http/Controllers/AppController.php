<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepageApp()
    {
        return view("app.homepage");
    }

    public function appInventoryProducts()
    {
        $products = Product::all();

        return view("app.inventory.products", ["products" => $products]);
    }
}
