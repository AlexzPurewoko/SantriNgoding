<?php

Route::group(['middleware' => ['web']], function(){
  Route::post('signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);
  Route::get('signup', function(){
    return view('signup');
  });

  Route::post('signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
  ]);
  Route::get('signin', function(){
    return view('login');

  });

  Route::get('/', [
    'uses' => 'UserController@welcome',
    'as' => 'home'
  ]);
  Route::get('dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
  ]);

  Route::get('admin', ['middleware' => 'admin', function(){
    echo "admin";
  }]);

  Route::get('logout', [
    'uses' => 'UserController@logout',
    'as' => 'logout'
  ]);
  Route::delete('/delete/{id}',['uses'=>'UserController@delete', 'as'=>'delete']);
});
