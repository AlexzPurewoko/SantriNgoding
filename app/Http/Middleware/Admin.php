<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
use \Illuminate\Contracts\Auth\Guard;
use \Illuminate\Auth\SessionGuard;


class Admin
{
  protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
      $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
      if ($this->auth->guest()) {
        if ($request->ajax()) {
          return response('Unauthorized', 401);
        }else {
          return Redirect::route('signin');
        }
      }else {
        if ($this->auth->user()->admin()) {
          die('is admin');
        }else {
          die('is not admin');
        }
      }
        return $next($request);
    }
}
