<?php

namespace App\Http\Controllers;

use Session;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App;

class UserController extends Controller
{
  protected $userModel;

  public function __construct(User $users)
  {
    $this->userModel = $users;
  }
public function welcome()
{
  return view('welcome');
}

  public function postSignUp(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|unique:users',
      'nama' => 'required|max:120',
      'password' => 'required|min:4'
    ]);
    $nama = $request['nama'];
    $email = $request['email'];
    $password = bcrypt($request['password']);

    $user = new User();
    $user->nama = $nama;
    $user->email = $email;
    $user->password = $password;

    $user->save();

    return redirect()->route('signin');
  }

  public function postSignIn(Request $request){

    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);

    $userdata = array(
    'email' => $request->get('email'),
    'password' => $request->get('password')
    );

    if (Auth::attempt($userdata))
    {
      return redirect()->route('dashboard');
    }
    return redirect('signin');
  }
  public function getDashboard(Request $request)
  {
    $users = $this->userModel->all();
    return view('dashboard', ['data' => $users]);
  }
  public function logout()
  {
    Auth::logout();
    Session::flush();
    return redirect()->route('home');
  }
  public function delete(Request $request, $id)
  {
    $users = User::where('id', $id)->first();
    if ($users) {
      $users->delete();
      return redirect()->route('dashboard');
    }
  }
}
