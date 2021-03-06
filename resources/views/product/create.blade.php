@extends('layouts.master')
@section('content')
  <section class="bg0 p-t-75 p-b-120">
    <div class="container">
  <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <div class="form-group">
    <label for="exampleInputEmail1">Product Title</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    -->  </div>
    <div class="form-group">
      <label for="original_price">Original Price</label>
      <input type="text" class="form-control" id="original_price" placeholder="Original Price" name="original_price">
    </div>

    <div class="form-group">
      <label for="original_price">Discount Price</label>
      <input type="text" class="form-control" id="discount_price" placeholder="Discount Price" name="discount_price">
    </div>
    <div class="form-group">
      <label for="original_price">Quantity</label>
      <input type="text" class="form-control" id="discount_price" placeholder="Quantity" name="in_stock">
    </div>
<!--   <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
<!--   <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="original_price">URL</label>
    <input type="text" class="form-control" id="url" placeholder="URL" name="url">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" name="image" id="image">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
<!--   <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset> -->
<!--   <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div> -->
  <h4 class="_st">Category</h4>
  <ul class="list-inline">


    @foreach($categories as $category)
    <li>
      <input class="magic-checkbox" type="checkbox" name="category[]" value="{{ $category->id }}" id="{{ $category->id }}" >
      <label for="{{ $category->id }}">  {{ $category->name }}</label>

    </li>
    @endforeach
  </ul>
  <br>
  <h4 class="_st">Choose Any One  Category for searching purpose </h4>
  <div class="form-check list-inline">
    @foreach($categories as $category)
    <input type="radio" class="form-check-input" name="categories" id="optionsRadios3" value="{{ $category->name }}" > <label> {{ $category->name }} </label>
    @endforeach
  </div>
</ul>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
@endSection
