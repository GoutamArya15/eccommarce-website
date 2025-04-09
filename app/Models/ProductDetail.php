<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{

    protected $table = 'product_details';
    protected $fillable = ['product_id', 'product_description', 'product_price', 'product_image'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
