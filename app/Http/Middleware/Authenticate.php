<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
use \Illuminate\Contracts\Auth\Guard;

class Authenticate
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
      if (Auth::guard($guard)->guest()) {
        if ($request->ajax()) {
          return response('Unauthorized', 401);
        }else {
          return return Redirect::route('signin');
        }
      }
        return $next($request);
    }
}
