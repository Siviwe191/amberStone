<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_code', 'description', 'price_2023', 'price_2024', 'price_2025'];
}
