<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('master', function(){
  return view('layout.master');
});

Route::get('header', function(){
  return view('layout.headerfooter');
});

Route::get('login', function(){
  return view('login');
});

Route::get('register', function(){
  return view('register');
});
