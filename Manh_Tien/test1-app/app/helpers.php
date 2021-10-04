<?php
use Illuminate\Support\Str;

if (!function_exists('showProductImage')) {
    function showProductImage($image)
    {
        if (Str::contains($image, 'http')) {
            return $image;
        }
        return asset('storage/products/' . $image);
    }
}