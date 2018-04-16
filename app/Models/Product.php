<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    public $guarded = ['id'];

    public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}
	public function getRouteKeyName()   
	{
		return 'url';
	}

}
