<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Recommend;
use App\Models\Enquiry;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('user', 'enquiries')->paginate(9);
        $categories = Category::has('products')->pluck('name');
        return view('welcome', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $name = pathinfo($filename, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $filename = substr(str_slug($name), 0, 10)  . '-' . time() . '.' . $ext;
            $file->move(public_path('product_images'), $filename);
            $filepath = 'product_images' . $filename;
            $media = 'product_images/'.$filename;
        }    
        $product = Product::create([
            'product_name' => $request->product_name,
            'original_price' => $request->original_price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'url' => $request->url,
            'status' => 'active',
            'category' => $request->categories,
            'in_stock' => $request->in_stock,
            'image' => $media
        ]);
        $product->categories()->attach($request->category);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $url)
    {

        $product = Product::where('url', $url)->first();
        $categories = Category::has('products')->pluck('name');
        $recommend = Recommend::create([
            'product_id' => $product->id,
            'image' => $product->image
        ]);
        return view('product.show', compact('product', 'categories'));
    }

    public function showAll()
    {
        $products = Product::all();
        return view('product.showAll', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update([
            'product_name' => $request->product_name,
            'original_price' => $request->original_price,
            'discount_price' => $request->discount_price,
            'description' => $request->description,
            'category' => $request->categories,
            'in_stock' => $request->in_stock,
        ]);
        Product::find($id)->categories()->attach($request->category);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return back();
    }

    public function category(Category $category)
    {
        $products = $category->products;
        return view('product.category', compact('products', 'category') );
    }

    public function search(Request $request)
    {
        $data = $request->search;
        $products = Product::where('product_name', 'like', "%$data%")
        ->orWhere('description', 'like', "%$data%")
        ->orWhere('category', 'like', "%$data%")->paginate();
        return view('product.search', compact('products'));
    }

    public function enquiryStore(Request $request)
    {
        $user = $request->user();
        $enquiry = Enquiry::create([
            'user_id' => $user->id,
            'product_id' => $request->id,
            'type' => 'enquiry'
        ]);

        return back()->with('flash_message',
         'Item, Added to your wishlist.');
    }
            // $request->user()->enquiries()->syncWithoutDetaching([$product->id]);
    // return back();


    public function enquiries(Request $request)
    {
        $enquiries = $request->user()->enquiries()->get(['product_id']);
        $products = Product::with('enquiries')->whereIn('id', $enquiries)->get();
        return view('product.enquiries', compact('products'));
    }
    public function destroyEnquiry($id)
    {
      $wishlist = Enquiry::findOrFail($id);
      $wishlist->delete();
      return back()->with('success', 'Item successfully deleted');

  }
}
