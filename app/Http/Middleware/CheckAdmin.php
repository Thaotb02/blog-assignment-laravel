<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class CheckAdmin
{

    public function handle($request, Closure $next)
  {

        if (Auth::user()->role==config('common.role.admin')) {
              return $next($request);
        }
        return redirect()->route('auth.loginForm');  }
}
