<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'medias';
    protected $fillable = ['name', 'desc', 'priority', 'image', 'product_id'];

    public function product(){
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
