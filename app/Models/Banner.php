<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'title',
    'image',
    'type',
    'position',
    'status'
])]
class Banner extends Model
{
    //
}
