<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App;

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

  public function postSignIn(Request $request){

    $userdata = array(
    'email' => $request->get('email'),
    'password' => $request->get('password')
    );

    if (Auth::attempt($userdata))
    {
      return redirect()->route('dashboard');
    }

  }

}
