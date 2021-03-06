@extends('layouts.master')
@section('content')
@section('metas')
<meta name='keywords' content='{{ $product->meta_keywords }}' />
<meta name="description" content='{{ $product->meta_desc }}'>
<meta property="og:title" content="{{$product->title}}" />
<meta property="og:image" content="{{ asset($product->image) }}" />
@endSection 
<style type="text/css">

</style>
@section('content')
<div class="sec-banner bg0 p-t-80 p-b-50">
<div class="container">
<section class="bg0 p-t-75 p-b-120">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
      <div class="row">
        <div class="col-md-6 col-lg-7 p-b-30">
          <div class="p-l-25 p-r-30 p-lr-0-lg">
            <div class="wrap-slick3 flex-sb flex-w">
              <div class="wrap-slick3-dots"></div>
              <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

              <div class="slick3 gallery-lb">
                <div class="item-slick3" data-thumb="{{ asset($product['image']) }}">
                  <div class="wrap-pic-w pos-relative">
                    <img src="{{ asset($product['image']) }}" alt="IMG-PRODUCT">

                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset($product['image']) }}">
                      <i class="fa fa-expand"></i>
                    </a>
                  </div>
                </div>

                       <!--  <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                          <div class="wrap-pic-w pos-relative">
                            <img src="{{ asset($product['image']) }}" alt="IMG-PRODUCT">

                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset($product['image']) }}">
                              <i class="fa fa-expand"></i>
                            </a>
                          </div>
                        </div>

                        <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                          <div class="wrap-pic-w pos-relative">
                            <img src="{{ asset($product['image']) }}" alt="IMG-PRODUCT">

                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset($product['image']) }}">
                              <i class="fa fa-expand"></i>
                            </a>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                  <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                      {{ $product->product_name}}
                    </h4>

                    <span class="mtext-106 cl2">
                      &#8377; {{ $product['original_price']}}
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                     {{ $product->description }}
                   </p>

                 <!--    <div class="flex-w flex-r-m p-b-10">
                      <div class="size-204 flex-w flex-m respon6-next">
                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                          <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-minus"></i>
                          </div> -->

                          <!-- <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                          <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-plus"></i>
                          </div>
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                          Add to cart
                        </button> -->
                     <!--  </div>
                    </div>  
                  </div> -->

                  <!--  -->
                  <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                      <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                    </div>

                    <a  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-facebook"></i>
                    </a>

                    <a  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter" href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-twitter"></i></a>

                    <a  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus" href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a  class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" href="whatsapp://send?text=" data-tooltip="Whatsapp" onclick="window.open('whatsapp://send?text=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-sm-5">
			<div class="box">
				<img src="{{ asset($product->image) }}" class="product_image">
			</div>
		</div>
		<div class="col-sm-5">
			<div class="description">
				<h1> {{ $product->product_name }}</h1>
				<ul class="footer-social-icon list-inline">
					<li>
						<a class="w-inline-block social-share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a class="w-inline-block social-share-btn tw" href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a class="w-inline-block social-share-btn gplus" href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-google"></i></a>
						
					</li>
					<li>
						<a href="whatsapp://send?text=" title="Share On Whatsapp" onclick="window.open('whatsapp://send?text=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-whatsapp"></i></a>
					</li>
				</ul>
				<p> {{ $product->description }}</p>
				<button class="buy">Buy This Product</button>
			</div>
		</div>
	</div>
</div> -->
</div>
</div>
@endSection