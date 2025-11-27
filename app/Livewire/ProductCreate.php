<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory;

class ProductCreate extends Component
{
    public $subcategory_id;
    public $name;
    public $slug;
    public $sku;
    public $description;
    public $barcode;
    public $brand;
    public $image_url;
    public $quantity;
    public $price;
    public $location;
    public $date_received;

    public $subcategories;

    protected $rules = [
        'subcategory_id' => 'required|exists:subcategories,id',
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|unique:products,slug',
        'sku' => 'required|string|max:255|unique:products,sku',
        'description' => 'nullable|string',
        'barcode' => 'nullable|string|unique:products,barcode',
        'brand' => 'nullable|string|max:255',
        'image_url' => 'nullable|string|max:255',
        'quantity' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'location' => 'nullable|string|max:255',
        'date_received' => 'nullable|date',
    ];

    public function mount()
    {
        $this->subcategories = Subcategory::all();
    }

    public function submit()
    {
        $this->validate();

        Product::create([
            'subcategory_id' => $this->subcategory_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'sku' => $this->sku,
            'description' => $this->description,
            'barcode' => $this->barcode,
            'brand' => $this->brand,
            'image_url' => $this->image_url,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'location' => $this->location,
            'date_received' => $this->date_received,
        ]);

        $this->reset([
            'subcategory_id', 
            'name', 
            'slug', 
            'sku', 
            'description', 
            'barcode', 
            'brand', 
            'image_url', 
            'quantity', 
            'price', 
            'location', 
            'date_received'
        ]);

        session()->flash('message', 'Product created successfully!');
    }


    public function render()
    {
        return view('livewire.product-create');
    }
}
