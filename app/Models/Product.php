<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected static function booted()
    {
        static::created(function($product){
           $product->slug = $product->slug . '-' .  $product->id;
           $product->save();
        });
    }
    protected $fillable = ['name', 'price', 'discount', 'brand_id', 'category_id', 'slug'];

    public function brand(){
        return $this->belongsTo(\App\Models\Brand::class, 'brand_id');
    }

    public function category(){
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function medias(){
        return $this->hasMany(\App\Models\Media::class, 'product_id');
    }

    public function orderDetails(){
        return $this->hasMany(\App\Models\OrderDetail::class, 'product_id');
    }
}
