@extends('layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<hr>
<!-- <nav class="navbar navbar-default">
  <ul class="nav navbar-nav">
    <li class="active "><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav> -->

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="side-bar no-padding">

        Categories
        <div class="row">
          <ul class="simple-list">
            <?php foreach ($categories as $category): ?>
              <li>{{ $category->name }}</li>
            <?php endforeach ?>
          </ul>
        </div>
        <hr>
        Popular Products
        <div class="row">
          <ul class="simple-list">
            <li><img src={{ asset('product_images/4.jpg')}} class="img-thumbnail">
              <span style="text-align:center;">&#8377; 0.00</span><br></li>
              <li><img src={{ asset('product_images/7.jpg')}} class="img-thumbnail">
                <div class="text-align:center;">
                &#8377; 0.00</div><br></li>
                <li><img src={{ asset('product_images/1.jpg')}} class="img-thumbnail">
                  &#8377; 0.00<br></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-10 center vl">All Products<br>
            <br>
            <div class="row center">
              <?php foreach ($products as $product): ?>
                <div class="col-sm-4">
                  <div class="product-box">
                    <img src={{ asset('product_images/3.jpg')}} class="product_image">
                    {{ $product['product_name'] }}
                    <br>
                    &#8377; {{ $product['original_price']}}<br>
                    <button title="Add to Cart" class="addCart">Add to Cart</button>
                  </div>
                </div>
              <?php endforeach ?>
            <br>
            </div>
            <!--   <div class="col-sm-4">
                <div class="product-box">
                  <img src={{ asset('product_images/1.jpg')}} class="product_image">
                  &#8377; 0.00<br>
                  <button title="Add to Cart">Add to Cart</button>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="product-box">
                  <img src={{ asset('product_images/4.jpg')}} class="product_image">
                  &#8377; 0.00<br>
                  <button title="Add to Cart">Add to Cart</button>
                </div>
              </div>

            </div>

            <!-- third row -->
            <!-- <br>
            <div class="row center">
              <div class="col-sm-4">
                <div class="product-box">
                  <img src={{ asset('product_images/4.jpg')}} class="product_image">
                  &#8377; 0.00<br>
                  <button title="Add to Cart">Add to Cart</button>

                </div>

              </div>
              <div class="col-sm-4">
                <div class="product-box">
                  <img src={{ asset('product_images/3.jpg')}} class="product_image">
                  &#8377; 0.00<br>
                  <button title="Add to Cart">Add to Cart</button>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="product-box">
                  <img src={{ asset('product_images/1.jpg')}} class="product_image">
                  &#8377; 0.00<br>
                  <button title="Add to Cart">Add to Cart</button>
                </div>
              </div>

            </div>
          </div> */-->
        </div>
      </div>
{{ csrf_field() }}
<button class="btn">hi</button>
<div class="bg-danger ajaxStatus"></div>
      <script type="text/javascript">
        $('.btn').click(function(){
          var test = "";
          var token = $('input[name="_token"]').val();
          $.ajax({
                  url: "/ajaxTest",
                  type: "post",
                  data: { test : test, _token: token },
                  success: function(d) {
                      console.log(d);
                      $('.ajaxStatus').text(d['status']);
                      // alert(d['status']);
                  }
            });
          });
      </script>
      <script>
  $('document').ready(function(){
    $('.addCart').click(function(){
      alert ("yuhoo");
    });
  });
</script>
      @endSection
