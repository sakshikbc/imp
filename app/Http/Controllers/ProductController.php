<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
           foreach ($request->image as $file) {
               $filename = $file->getClientOriginalName();
               $name = pathinfo($filename, PATHINFO_FILENAME);
               $ext = $file->getClientOriginalExtension();
               $filename = substr(str_slug($name), 0, 10)  . '-' . time() . '.' . $ext;
               $file->move(public_path('product_images'), $filename);
               $filepath = 'product_images' . $filename;
               $media = Product::create([
                   'image' => 'product_images/'.$filename,
               ]);
           }
       }    
       Product::create([
        'product_name' => $request->product_name,
        'original_price' => $request->original_price,
        'discount_price' => $request->discount_price,
        'description' => $request->description,
        'category_id' => 1,
    ]);
       return back();
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
            // 'in_stock' => $request->in_stock,
        ]);
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
}