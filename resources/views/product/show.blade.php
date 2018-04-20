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

<div class="container">
	<div class="row">
		<div class="col-md-2">
			@include('layouts.sidebar')
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
</div>
@endSection