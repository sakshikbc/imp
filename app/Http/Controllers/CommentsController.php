<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
   public function index()
    {
        $comments = Comment::with('post')->orderBy('id', 'desc')->get();
        return view('comments.index', compact('comments'));
    }

    public function edit(Request $request, $id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        Comment::where('id', $id)->update([
            'name' => $request->name,
            'body' => $request->body,
            'website_url' => $request->website_url,
            'email' => $request->email,
        ]);
        return redirect()->route('comments.index')->with('success', 'Comment has been updated');
    }

    public function store(Product $post)
    {
        Comment::create([
        	'name' => request('name'),
            'email' => request('email'),
            'body' => request('body'),
            'website_url' => request('website_url'),
            'status' => 'nill',
            'post_id' => $post->id
        ]);
        return back();
    }

    public function destroy(Request $request, $id)
    {
        Comment::where('id', $id)->delete();
        return back();
    }

    public function approve($id)
    {
        $comment = Comment::where('id', $id)->first();
        if($comment){
            $comment->status= "Approved";
            $comment->save();
        }
        return back();
    }

    public function reject($id)
    {
        $comment = Comment::where('id', $id)->first();
        if($comment){
            $comment->status= "Disapproved";
            $comment->save();
        }
        return back();
    }


}
