<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
/* use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model; */

class User extends Authenticatable // extends Model implements Authenticatable
{
  // use \Illuminate\Auth\Authenticatable;

  protected $fillable = [
    'name', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];
}
