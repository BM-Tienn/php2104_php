<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class ,'order_products');
    }
}
