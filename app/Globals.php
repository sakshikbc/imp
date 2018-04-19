<?php
namespace App;
use App\Models\Category;
use DB;

class Globals {

	public function categories()
	{
		$categories =  Category::all();
		return $categories;
	}

	public function mostly_viewed_products()
	{
		$mostly_viewed_products = DB::table('recommends')
		->select('product_id', DB::raw('count(*) as total'))
		->groupBy('product_id')
		->orderBy('total', 'desc')
		->take(3)
		->get();
		return $mostly_viewed_products;
	}
}
