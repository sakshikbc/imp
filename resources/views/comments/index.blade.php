@extends('layouts.master')
<style type="text/css">
#footer {
  display: none;
}
</style>
@section('content')

<aside class="blog-sidebar">
  <div class="plane-header">
   <nav class="navbar navbar-default nav-dropship" style="background:none;padding-right: 15px;border:none;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="http://biglytech.net">
      <img width="65" src="{{asset('dropship-content/img/bigly-white.svg')}}" alt="bigly online seller" style="margin-top: -8px">
    </a>
    <div class="" id="navbar-sample">
      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="" class="seller-a dib"></a>
        </li>
      </ul>
    </div>
  </nav> 
</div>
@include('posts.nav')
</aside>
<main class="blog-main-section">
  <div class="">
    <h3>Comments</h3>
    <hr>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Post Name</th>
        <th>Name</th>
        <th>Email</th>
        <th>Comment</th>
        <th>Status</th>
        <th>Date</th>
        <th>Options</th>

      </tr>
    </thead>
    <tbody>
      @foreach($comments as $comment)
      <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->post->title }}</td>
        <td>{{ $comment->name }}</td>
        <td>{{ $comment->email }}</td>
        <td>{{ $comment->body }}</td>
        <td>@if ($comment->status == "Approved" ) 
          Approved
          <a class="" href="{{ route('comment-disapprove', $comment->id) }}">Disapprove</a>
          @elseif ($comment->status == "Disapproved" )
          Disapproved
          <a class="" href="{{ route('comment-approve', $comment->id) }}">Approve</a>
          @elseif ($comment->status == "nill")
          <a class="" href="{{ route('comment-approve', $comment->id) }}">Approve</a>
          <a class="" href="{{ route('comment-disapprove', $comment->id) }}">Disapprove</a>
          @endif          
        </td>
        <td>{{ $comment->created_at  }}<br>
          <td class="action-button-list" width="230">
            <a class="" href="{{ route('comment-edit', $comment->id) }}" ><i class="aqil-icon-pencil3"></i>Edit</a>
            <a class="trash-hover" onclick="return destroy(this);" href="{{ route('comment-destroy', $comment->id) }}">delete</a>
          </td>


        </tr>
        @endforeach
      </tbody>
    </table>
  </main>



  @endsection