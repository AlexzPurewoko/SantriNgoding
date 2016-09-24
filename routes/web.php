<?php

Route::group(['middleware' => ['web']], function(){

  Route::get('blog', ['uses' => 'PostController@blog', 'as' => 'blog']);

  Route::post('signup', ['uses' => 'UserController@postSignUp', 'as' => 'signup']);

  Route::get('signup', function(){ return view('signup');});

  Route::post('signin', ['uses' => 'UserController@postSignIn', 'as' => 'signin']);

  Route::get('signin', function(){ return view('page.login'); } );

  Route::get('edit/{id}', [ 'uses' => 'UserController@edit', 'as' => 'edit' ]);

  Route::post('edit/{id}', [ 'uses' => 'UserController@pedit', 'as' => 'edit' ]);

  Route::get('/', [ 'uses' => 'PostController@welcome', 'as' => 'home' ]);

  Route::get('dashboard', ['uses' => 'UserController@getDashboard', 'as' => 'dashboard', 'middleware' => 'auth' ]);

  Route::get('admin', ['middleware' => 'admin', function(){
    echo "admin";
  }]);

  Route::get('logout', ['uses' => 'UserController@logout', 'as' => 'logout']);

  Route::get('delete/{id}', ['uses' => 'UserController@destroy', 'as' => 'delete']);

  Route::get('about', ['uses' => 'PostController@about', 'as' => 'about']);
  Route::resource('posts', 'PostController');
});
