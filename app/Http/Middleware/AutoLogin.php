<?php

namespace App\Http\Middleware;

use Closure;

class AutoLogin
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
        auth()->login(\App\User::first());
        
        return $next($request);
    }
}
