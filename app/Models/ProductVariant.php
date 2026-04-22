<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'product_id',
    'size',
    'sku',
    'price',
    'stock',
    'position',
    'status'
    ])]
#[Hidden(['id', 'created_at', 'updated_at'])]
class ProductVariant extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
