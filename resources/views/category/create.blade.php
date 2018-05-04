@extends('layouts.master')
@section('content')
<section class="bg0 p-t-75 p-b-120">
<div class="container">
	<form method="POST" action="{{ route('category.store') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Category Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    -->  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
@endSection