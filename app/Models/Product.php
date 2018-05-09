<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use App\User;

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

	public function recommend()
	{
		return $this->belongsTo(Recommend::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function enquiries()
	{
		return $this->hasMany(Enquiry::class);
	}

	


}
