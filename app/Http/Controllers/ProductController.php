<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('subcategory')->findOrFail($id);

        return view('app.inventory.product-details', compact('product'));
    }
}
