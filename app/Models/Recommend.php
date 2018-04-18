<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Recommend extends Model
{
	public $fillable = ['product_id'];
	public function products()
	{
		return $this->belongsTo(Product::class, 'product_id');
	}
}
