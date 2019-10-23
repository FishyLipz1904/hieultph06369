<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckUserStatus
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
       
        if(Auth::user()->is_active == config('active_status.deactive') ){
            abort(403, "Tài khoản của bạn đã bị khóa bởi admin");
           
        }
        return $next($request);
       
    }
}
