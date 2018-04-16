<?php

namespace App\Models;

use App\Models\CartItem;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
