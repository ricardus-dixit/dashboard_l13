<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

#[Fillable([
    'category_id',
    'name',
    'slug',
    'description', 
    'short_description',
    'price',
    'sale_price',
    'sku',
    'stock',
    'image',
    'featured',
    'status',
    'views',
    'sales_count',
    'meta_title',
    'meta_description',
    'meta_keywords'
    ])]
#[Hidden(['id', 'created_at', 'updated_at'])]
class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slugify($product->name);
            }
        });
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
