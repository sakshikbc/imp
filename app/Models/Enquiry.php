<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Product;

class Enquiry extends Model
{
    public $table = 'enquiries';
	public $guarded = ['id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
