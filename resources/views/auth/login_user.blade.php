@extends('layouts.master')

@section('content')
<section class="bg0 p-t-75 p-b-120">
	<div class="container">
			<h4 class="mtext-105 cl2 txt-center p-b-30">
				Login
			</h4>
			<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="block">
			<div class="bor8 m-b-20 how-pos4-parent">
				<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone" placeholder="Your Mobile number">
			</div>
			<div class="bor8 m-b-20 how-pos4-parent">
				<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Password here">
			</div>
			<input type="button" name="login" value="Login" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer submit-button">
				
		</div>
		</form>
	</div>
</section>
@endSection