<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
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

    return redirect()->back();
  }

  public function postSignIn(Request $request)
  {

  }
}
