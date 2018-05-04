@extends('layouts.master')
@section('content')
<section class="bg0 p-t-75 p-b-120">
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Category Name</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categories as $category): ?>
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</section>
@endSection