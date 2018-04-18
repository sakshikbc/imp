<?php 
$meta = [
  'title' => 'Bigly | Get all The Update of E-commerce Marketplaces and Droship Business',
  'description' => 'Description – Bigly | Get all the e-commerce and dropship business  latest reports, tips and tricks, how to sell online and how to increase sell on e-commerce marketplaces.',
  'keywords' => 'Keywords – bigly blog ,blog biglydropship , dropship blog',
  // 'image' = > 'http://s.bigly.io/blog_main/1520602870-G9mBhffzFbo61Yv.jpg',
];
?>
@extends('layouts.master')
@section('content')
<hr>

@if($products)
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="side-bar no-padding">

        Categories
        <div class="row">
          <ul class="simple-list">
            <?php foreach ($categories as $category): ?>
              <li>
                <a href="/category/{{ $category }}">
                  {{ $category }}
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <hr>
        Popular Products
        <div class="row">
          <ul class="simple-list">
            <?php foreach ($mostly_viewed_products as $mostly_viewed_product): ?>
              
            <li><img src={{ asset('product_images/4.jpg')}} class="img-thumbnail">
              {{ $mostly_viewed_product->product_id }}
              <span style="text-align:center;">&#8377; 0.00</span><br></li>
              
            <?php endforeach ?>
    <!--           
              <li><img src={{ asset('product_images/7.jpg')}} class="img-thumbnail">
                <div class="text-align:center;">
                &#8377; 0.00</div><br></li>
                <li><img src={{ asset('product_images/1.jpg')}} class="img-thumbnail">
                  &#8377; 0.00<br></li> -->
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
                    <a href="{{ route('product', $product->url ) }}"><img src="{{ asset('product_images/3.jpg') }}" class="product_image"></a>

                    <a href="{{ route('product', $product->url ) }}">{{ $product['product_name'] }}</a>
                    <br>
                    &#8377; {{ $product['original_price']}}<br>
                    <button title="Buy this product" class="buy"  data-toggle="modal" data-target="#phone">Buy</button>
                  </div>
                </div>
              <?php endforeach ?>
              <br>
            </div>
            @endif
            {{-- phone model --}}
            <div class="modal fade" id="phone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close closemodel" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Enter your Name and Number</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post">
                      {{ csrf_field() }}
                      <input type="text" name="name" placeholder="Your name here">
                      <input type="tel" name="phone" placeholder="Your number here">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary send"  data-toggle="modal" data-target="#send">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            {{-- phonemodel complete --}}

            {{-- verify model --}}
            <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Verify</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            {{-- verify model complete --}}
          </div>
        </div>
        <script>
          $(document).ready(function () {
           $(".buy").click(function(){
             $('#phone').modal('show');
           });
         });
          $(document).ready(function () {
            $("#send").click(function(){
              $( ".closemodel" ).click();
              $('#verify').modal('show');
            });
          });

          var token = $('input[name="_token"]').val();

          $(".send").click(function(){
            var phone = $('input[name="phone"]').val();
            $.ajax({
             type: 'POST',
             url: '/requestOtp',
             data: { '_token': token, 'phone': phone },
             success: function(data){
              if(data['status'] == 'failed'){
                $('#phone').hide();
              }
            }
          });
          });

        </script>
        @endSection
