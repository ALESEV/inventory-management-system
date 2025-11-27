<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "slug",
        "subcategory_id",
        "sku",
        "description",
        "barcode",
        "brand",
        "image_url",
        "quantity",
        "price",
        "location",
        "date_received"
    ];

        public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
