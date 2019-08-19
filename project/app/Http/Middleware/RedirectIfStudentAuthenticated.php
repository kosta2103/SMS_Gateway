<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class RedirectIfStudentAuthenticated
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
        if(Auth::user())
        {
            if(Auth::user()->role_id == 1 && ($request->path() == 'students' || strpos($request->path(), 'students/'.Auth::id()) !== false))
            {
                return $next($request);
            }
            return redirect(URL::previous()); 
        }
        return redirect(URL::previous()); 
    }
}
