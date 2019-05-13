<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Chair
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
        if(Auth::user() != null && Auth::user()->user_type == 'chair')
        {
            return $next($request);
        }
        return redirect()->back();
    }
}
