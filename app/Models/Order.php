<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'name',
        'phone_number',
        'email',
        'address',
        'product_name',
        "qty",
        "total_price",
        'note',
        'slug',
    ];
}
