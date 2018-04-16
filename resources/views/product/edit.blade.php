@extends('layouts.master')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <div class="form-group">
    <label for="exampleInputEmail1">Product Title</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="{{ $product->product_name }}">
  </div>
  <div class="form-group">
    <label for="original_price">Original Price</label>
    <input type="text" class="form-control" id="original_price" placeholder="Original Price" name="original_price" value="{{ $product->original_price }}">
  </div>

  <div class="form-group">
    <label for="original_price">Discount Price</label>
    <input type="text" class="form-control" id="discount_price" placeholder="Discount Price" name="discount_price" value="{{ $product->discount_price }}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" name="image" id="image">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <div class="form-group">
   <h4 class="_st">Category</h4>
   @foreach($tags as $tag)
   <input class="magic-checkbox" type="checkbox" name="tag[]" value="{{ $tag->id }}" id="{{ $tag->id }}" >
   <label for="{{ $tag->id }}">  {{ $tag->name }}</label>
   @endforeach
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endSection
