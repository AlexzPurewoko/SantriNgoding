<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Illuminate\Support\Facades\Hash;
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
  return view('blog');
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
    $password = hash::make($request['password']);

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
      return redirect()->route('posts.index');
    }
    Session::flash('error', 'Silahkan coba lagi');
    return redirect('signin');
  }

  public function logout()
  {
    Auth::logout();
    Session::flush();
    return redirect()->route('welcome');
  }
  public function delete(Request $request, $id)
  {
    $users = User::where('id', $id)->first();
    if ($users) {
      $users->delete();
      return redirect()->route('dashboard');
    }
  }

  public function getEdit(Request $request, $id)
  {
    $edit = User::find($id);
    return view('page.edit')->with('data', $edit);
  }

  public function postEdit(Request $request, $id)
  {
    $users = User::find($id);

    $users->nama = $request->Input('nama');
    $users->email = $request->Input('email');
    $users->save();

    return redirect()->route('dashboard')->with('update', ' profile has been updated');
  }

  public function getPedit(Request $request, $id)
  {
    $edit = User::find($id);
    return view('page.pedit')->with('data', $edit);
  }

  public function postPedit(Request $request, $id)
  {

    $user     = User::find($id);
    $pass     = User::find($id)->password;

    $old      = $request->Input('oldpassword');
    $new      = $request->Input('npassword');
    $con      = $request->Input('cpassword');

    $hold     = hash::make($request['oldpassword']);
    $hnew     = hash::make($request['npassword']);


    if (Hash::check($old, $pass)) {
      if ($new == $con) {
        $user->password = $hnew;
        $user->save();

        Session::flash('success', 'Password Berhasil Dirubah');
        return redirect()->back();
      }
      else {
        Session::flash('error', 'Silahkan coba lagi');
        return redirect()->back();
      }
    }
    else {
      Session::flash('error', 'Silahkan coba lagi');
      return redirect()->back();
    }


    //   $user->password = $npass;
    //   $user->save();
    //   Session::flash('success', 'Password berhasil diubah');
    // }
    // else {
    //   Session::flash('error', 'Password belum diubah');
    // }


  }

  public function destroy($id)
  {
    $users = User::find($id);
    $users->delete();

    return redirect()->route('dashboard')->with('deletemsg', ' Profile has been deleted');
  }

}
