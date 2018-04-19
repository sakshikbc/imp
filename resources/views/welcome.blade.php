<?php 
$meta = [
  'title' => 'Ederno | Get all The Update of E-commerce Marketplaces and Droship Business',
  'description' => 'Description – Ederno | Get all the e-commerce and dropship business  latest reports, tips and tricks, how to sell online and how to increase sell on e-commerce marketplaces.',
  'keywords' => 'Keywords – Ederno blog ,blog ',
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
   @include('layouts.sidebar')
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
                <form method="post" action="/requestOtp">
                  {{ csrf_field() }}
                  <input type="text" name="name" placeholder="Your name here">
                  <input type="text" name="phone" placeholder="Your number here">
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
                <p>Didn't get Otp? <a class="registerCheck resendOtp">resend</a></p>
                <div class="otpInfoMessage text-capitalize"></div>
                <h4 class="modal-title" id="myModalLabel">Verify</h4>
              </div>
              <div class="modal-body">
                <input class="otp-input" type="tel" maxlength="4" name="verifyOtp" autofocus>
                <div class="otpFailedMessage text-danger" style="display: none"> Otp Failed </div>
                <div class="otpSuccessMessage text-success" style="display: none"> Otp Matched </div>
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
          console.log(data);
              // if(data['status'] == 'success'){
              //   $('#verify').modal('show');
              // }
            }
          });
      });
      $('input[name="verifyOtp"]').keyup(function() {
        var check = false;
        var verifyOtp = $('input[name="verifyOtp"]').val();
        $('.otpFailedMessage').hide();
        $('input[name="verifyOtp"]').each(function() {
          if ($(this).val().length == 4) {
            check = true;
          }
        });
        if (check) {
          $('input[name="verifyOtp"]').prop('readonly', true);
          $('input[name="verifyOtp"]').prop('disabled', true);
          $.ajax({ 
           type: 'POST',
           url: '/verifyOtp',
           data: {'_token': token, 'verifyOtp': verifyOtp },
           success: function(data) {
            if (data['status'] == 'success') {
              $('input[name="verifyOtp"]').attr('readonly', true);
              $('.otpSuccessMessage').show();
              $('.loadingImage').show();
              $('#signupform').submit();
              $('input"]').attr('disabled', true);
            } else {
              $('input[name="verifyOtp"]').attr('readonly', false);
              $('input[name="verifyOtp"]').prop('disabled', false);
              $('.otpFailedMessage').show();
            }
          }
        });
        }
      });
    </script>
    @endSection
