<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class UserController extends Controller
{
  public function getDashboard()
  {
    return view('dashboard');
  }

  public function postSignUp(Request $request)
  {
    $nama = $request['nama'];
    $email = $request['email'];
    $password = bcrypt($request['password']);

    $user = new User();
    $user->nama = $nama;
    $user->email = $email;
    $user->password = $password;

    $user->save();

    return redirect()->route('dashboard');
  }

  public function postSignIn(Request $request)
  {
    return "hae";

    $userdata = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
    );

    if (Auth::attempt($userdata))
    {
      redirect()->route('dashboard');
    }
    return redirect()->back()->withInput();
  }

}
