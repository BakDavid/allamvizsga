<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Reviewer
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
        if(Auth::user() != null && Auth::user()->user_type == 'reviewer')
        {
            return $next($request);
        }
        return redirect()->back();
    }
}
