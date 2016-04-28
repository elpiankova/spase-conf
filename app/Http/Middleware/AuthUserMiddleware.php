<?php

namespace App\Http\Middleware;

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;
use Request;

class AuthUserMiddleware
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
        if(Sentinel::guest()){
            return redirect()->guest('login');

        }
        return $next($request);


    }
}
