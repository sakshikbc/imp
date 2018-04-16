<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    public $guarded = ['id'];

    public function products()
    {
    	return $this->belongsToMany(Product::class);
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
}
