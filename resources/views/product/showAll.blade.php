@extends('layouts.master')
@section('content')
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Product Name</th>
				<th>Original Price</th>
				<th>Quantity</th>
				<th>Category</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product): ?>
				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->product_name }}</td>
					<td>{{ $product->original_price }}</td>
					<td>{{ $product->in_stock }}</td>
					<td>
						@if (count($product->categories))
						@foreach ($product->categories as $category)
						<a href="/articles/category/{{ $category->name }}">{{ $category->name }}</a>
						@endforeach
						@endif
					</td>
					<td>{{ $product->status }}</td>
					<td><a href="{{ route('product.show', $product->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
						<a href="{{ route('product.edit', $product->id) }}" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
						<a onclick="return destroy(this);" href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
@endSection