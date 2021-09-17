<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orders_products');
    }
}
