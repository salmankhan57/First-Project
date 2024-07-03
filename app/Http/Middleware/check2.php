<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!(session()->has('loginadmin'))){
            return redirect('adlogin')->with("fail", "Login first MF");
        }
        return $next($request);
    }
}
