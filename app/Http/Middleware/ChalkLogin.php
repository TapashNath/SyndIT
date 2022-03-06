<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChalkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->get('login')){
            return redirect('admin/login');
        }
        return $next($request);
    }
}
