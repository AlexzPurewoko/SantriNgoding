<?php

Route::group(['middleware' => ['web']], function(){
  Route::post('signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);
  Route::get('signup', function(){
    return view('signup');
  });
  Route::get('/', function () {
      return view('welcome');
  });
});
