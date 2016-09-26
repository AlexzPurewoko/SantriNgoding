<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
{
  public function index()
  {
    # code...
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(Request $request)
  {
    // validate the DOMCdataSection
    $this->validate($request, [
      'title' =>  'required|max:255',
      'body'  =>  'required'
    ]);

    // store to the database
    $post = new Post;
    $post->title  = $request->title;
    $post->body   = $request->body;

    $post->save();
    Session::flash('success', 'The blog post was successfully save !' );
    return redirect()->route('posts.show', $post->id);
  }

  public function show($id)
  {
    $posts = Post::find($id);
    return view('posts.show')->with('post', $posts);
  }

  public function edit($id)
  {
    # code...
  }

  public function update(Request $request, $id)
  {
    # code...
  }

  public function destroy($id)
  {
    # code...
  }
}
