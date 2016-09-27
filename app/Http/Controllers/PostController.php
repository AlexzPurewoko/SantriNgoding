<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
{
  public function __construct() {
        $this->middleware('auth');
    }

  public function index()
  {
    // create a variable and store all the blog posts in it from the database
    $posts = Post::OrderBy('created_at', 'desc')->paginate(10);

    // return a view and pass in the above variable
    return view('posts.index')->with('posts', $posts);

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
    $post = Post::find($id);
    return view('posts.edit')->with('posts', $post);
  }

  public function update(Request $request, $id)
  {
        // Validate the data
    $post = Post::find($id);

    if ($request->input('slug') == $post->slug) {
      $this->validate($request, [
        'title' =>  'required|max:255',
        'body'  =>  'required'
      ]);
    }
    else {
      $this->validate($request, [
        'title' =>  'required|max:255',
        'slug'  =>  'required|alpha_dash|min:5|max:255|unique:posts,slug',
        'body'  =>  'required'
      ]);
    }

    // Save the data to the database
    $post = Post::find($id);

    $post->title = $request->input('title');
    $post->slug  = $request->input('slug');
    $post->body = $request->input('body');
    $post->save();

    Session::flash('success', 'the post was successfully updated');

    // redirect to another page
    return redirect()->route('posts.show', $post->id);
    // redirect view with flash message to posts.show
  }

  public function destroy($id)
  {
    $post = Post::find($id);
    $post->delete();
    Session::flash('success', 'The pos was successfully deleted');
    return redirect()->route('posts.index');
  }
}
