<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        "id",
        "name",
        "slug",
        "category_id"
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
