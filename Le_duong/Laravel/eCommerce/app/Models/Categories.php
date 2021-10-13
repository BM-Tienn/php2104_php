<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function getBanner()
    {
        return $this->hasOne(PhotoBanners::class,'id');
    }

    public function getProduct()
    {
        return $this->hasOne(Products::class,'id');
    }
}
