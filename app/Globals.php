<?php
namespace App;
use App\Models\Category;
use App\Models\Product;
use DB;

class Globals {

	public function categories()
	{
		$categories =  Category::all();
		return $categories;
	}

	public function products()
	{
		$mostly_viewed_products = DB::table('recommends')
		->select('product_id', DB::raw('count(*) as total'))
		->groupBy('product_id')
		->orderBy('total', 'desc')
		->take(3)
		->get();
		if(!empty($mostly_viewed_products))
		{
			foreach ($mostly_viewed_products as $mostly_viewed_product) {
				$products[] = Product::where('id', $mostly_viewed_product->product_id)->get();
			}
			
		}
		return $products;
		
	}
}
