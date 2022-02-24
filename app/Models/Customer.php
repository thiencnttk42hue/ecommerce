<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    
    protected $fillable=['id', 'fullName', 'email', 'pass', 'address', 'phone'];

    public function order(){
        return $this->hasMany(\App\Models\Order::class, 'customer_id');
    }
}
