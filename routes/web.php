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

  Route::get('logout', [
    'uses' => 'UserController@logout',
    'as' => 'logout'
  ]);
  
});
