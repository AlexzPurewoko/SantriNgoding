<?php

Route::group(['middleware' => ['web']], function(){
  // Page

  Route::get('/', [ 'uses' => 'PageController@welcome', 'as' => 'welcome' ]);
  Route::get('blog', ['uses' => 'PageController@blog', 'as' => 'blog']);
  Route::get('dashboard', ['uses' => 'PageController@dashboard', 'as' => 'dashboard', 'middleware' => 'auth' ]);
  Route::get('about', ['uses' => 'PageController@about', 'as' => 'about']);
  Route::get('contact', ['uses' => 'PageController@contact', 'as' => 'contact']);

  // User
  Route::post('signup', ['uses' => 'UserController@postSignUp', 'as' => 'signup']);
  Route::get('signup', function(){ return view('signup');});
  Route::post('signin', ['uses' => 'UserController@postSignIn', 'as' => 'signin']);
  Route::get('admin', ['middleware' => 'admin', function(){
    echo "admin";
  }]);
  Route::get('signin', function(){ return view('page.login'); } );
  Route::get('edit/{id}', [ 'uses' => 'UserController@edit', 'as' => 'edit' ]);
  Route::post('edit/{id}', [ 'uses' => 'UserController@pedit', 'as' => 'edit' ]);
  Route::get('logout', ['uses' => 'UserController@logout', 'as' => 'logout']);
  Route::get('delete/{id}', ['uses' => 'UserController@destroy', 'as' => 'delete']);

  // Post
  Route::resource('posts', 'PostController');
});
