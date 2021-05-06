<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
  {

        if (Auth::user()->role==config('common.role.user')) {
             
        return redirect()->route('layout-users.users.index');
        }
    }
}
