<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function userAdminDashboard()
    {
        $categories = Category::with(['subcategories' => function ($query) {
            $query->withCount('products'); 
        }])->get();

        $products = Product::all();

        // (price * quantity)
        $totalPrice = $products->sum(function ($product) {
            return $product->price * $product->quantity;
        });

        return view('app.userAdmin', [
            'categories' => $categories,
            'totalPrice' => $totalPrice,
            'products' => $products,
        ]);
    }
}
