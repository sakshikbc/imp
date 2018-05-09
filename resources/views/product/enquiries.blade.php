@extends('layouts.master')
@section('content')
<section class="bg0 p-t-75 p-b-120">
	<div class="container">
        Enquiries : @if(Auth::user()){{ App\Models\Enquiry::where('user_id', Auth::user()->id)->count() }}
                        @foreach($products as $product)
                        <article>
                            <h4><a href="{{ route('product.show', $product['id']) }}">{{ $product->product_name }}</a></h4>
                            <br>
                            <span class="pull-left">Added {{ $product->created_at->diffforHumans() }}</span>
                             <?php foreach ($product->enquiries as $e): ?>
                            <span class="pull-right">
                                <a href="{{ route('product.fav.destroy', $e->id ) }}" onclick="event.preventDefault(); document.getElementById('product-fav-destroy-{{ $e->id }}').submit();">Remove from Favourites</a>
                            </span>

                            <form action="{{ route('product.fav.destroy', $e->id) }}" method="POST" id="product-fav-destroy-{{ $e->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        <?php endforeach ?>
                        </article>
                        <hr>
                    @endforeach
                    @else
                        No favourite items found :(
                    @endif
	</div>
</section>
@endSection