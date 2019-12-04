<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRoleAdmin
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
       
       //Check user chua login và user->role != member
       if(Auth::check()==false){
            return redirect()->route('auth.login');
       }
      
       if(Auth::user()->role !== config('role.admin') ){
         return redirect()->route('website.index');
        }
        return $next($request);
    }
}
