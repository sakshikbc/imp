@extends('layouts.master')
@section('content')
<div class="card">
	<h3>Comment</h3>
	<div class="card-block">
		<form method="POST" action="{{ route('comment-update', $comment->id) }}">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="name" class="form-control" value="{{ $comment->name }}" placeholder="Your name here">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" value="{{ $comment->email }}" placeholder="Your Email here">
			</div>
			<div class="form-group">
				<textarea name="body" placeholder="Your comment here" class="form-control">{{ $comment->body }}</textarea>
			</div>
			<div class="form-group">
				<input type="text" name="website_url" class="form-control" value="{{ $comment->website_url }}" placeholder="Your Website url here">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-blue btn-round">Add Comment</button>
			</div>
		</form>
	</div>
</div>
@endsection