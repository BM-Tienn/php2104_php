<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHistoryDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_history_id',
        'name',
        'description',
        'price',
        'quantity',
        'sale_off',
        'is_public',
    ];

    public function producthistory()
    {
        return $this->belongsTo(ProductHistory::class);
    }
}
