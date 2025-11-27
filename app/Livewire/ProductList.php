<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    protected $listeners = ['productCreated' => '$refresh'];

    public function render()
    {
        return view('livewire.product-list', ['products' => Product::latest()->get()]);
    }
}
