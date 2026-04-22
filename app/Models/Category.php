<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Pest\Support\Str;

#[Fillable([
    'parent_id',
    'name',
    'slug',
    'description',
    'image',
    'level',
    'position',
    'status',
    'meta_title',
    'meta_description',
    'meta_keywords'
    ])]
#[Hidden(['id', 'created_at', 'updated_at'])]
class Category extends Model
{
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slugify($category->name);
            }
        });
    }
}
