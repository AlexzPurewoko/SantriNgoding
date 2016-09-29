<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests;
use Auth;

class PageController extends Controller
{
    protected $userModel;
    public function welcome()
    {
      $posts = Post::OrderBy('created_at', 'desc')->paginate(5);
      return view('page.welcome')->with('post', $posts);
    }

    public function show($id)
    {
      $posts = Post::find($id);
      return view('page.show')->with('post', $posts);
    }

    public function dashboard(Request $request)
    {
      $users = User::all();
      return view('page.dashboard', ['data' => $users]);
    }

    public function blog()
    {
      $posts = Post::OrderBy('created_at', 'desc')->paginate(5);


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

    public function getProfil()
    {
      return view('page.profil', ['user' => Auth::user()]);
    }

    public function gantifoto()
    {
      return view('page.gantifoto', ['user' => Auth::user()]);
    }

    public function postProfil(Request $request)
    {
      if ($request->hasfile('avatar')) {
        $avatar = $request->file('avatar');
        $filname = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filname));

        $user = Auth::user();
        $user->avatar = $filname;
        $user->save();
      }
      return view('page.profil', ['user' => Auth::user()]);
    }

    public function postCover(Request $request)
    {
      if ($request->hasfile('cover')) {
        $cover = $request->file('cover');
        $filename = time() . '.' . $cover->getClientOriginalExtension();
        Image::make($cover)->resize(1680, 1050)->save( public_path('/uploads/cover/' . $filename));

        $user = Auth::user();
        $user->cover = $filename;
        $user->save();
      }
      return view('page.profil', ['user' => Auth::user()]);
    }
}
