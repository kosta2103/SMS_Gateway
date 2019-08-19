<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class RedirectIfProfessorAuthenticated
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
            if(Auth::user()->role_id == 2 && ($request->path() == 'professors' || strpos($request->path(), 'professors/'.Auth::id()) !== false))
            {
                return $next($request);
            }
            return redirect(URL::previous()); 
        }
        return redirect(URL::previous()); 
    }
}
