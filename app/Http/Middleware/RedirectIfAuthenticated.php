<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $role = Auth::user()->user_type; 
      
          switch ($role) {
            case 'admin':
               return redirect('/allusers');
               break;
            case 'user':
               return redirect('/home');
               break; 
      
            default:
               return redirect('/home'); 
               break;
          }
        }
        return $next($request);
      }
}
