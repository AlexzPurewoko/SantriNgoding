<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests;

class PageController extends Controller
{
    protected $userModel;
    public function welcome()
    {
      $posts = Post::all();
      return view('page.welcome')->with('post', $posts);
    }

    public function dashboard(Request $request)
    {
      $users = User::all();
      return view('page.dashboard', ['data' => $users]);
    }

    public function blog()
    {
      $posts = Post::all();
      return view('page.blog')->with('post', $posts);
    }

    public function about()
    {
      return view('page.about');
    }

    public function contact()
    {
      return view('page.contact');
    }
}
