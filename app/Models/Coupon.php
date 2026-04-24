<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'code',
    'type',
    'value',
    'min_cart_value',
    'usage_limit',
    'used_count',
    'expires_at',
    'status'
])]
class Coupon extends Model
{
    //
}
