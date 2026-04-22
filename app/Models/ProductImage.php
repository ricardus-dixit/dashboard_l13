<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

#[Fillable([
    'product_id',
    'image',
    'position',
    'alt_text',
    'status'
])]
#[Hidden(['id', 'created_at', 'updated_at'])]
class ProductImage extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
