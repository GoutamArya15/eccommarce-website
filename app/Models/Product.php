<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'cat_id', 'product_slug'];

    public function details()
    {
        return $this->hasOne(ProductDetail::class, 'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
