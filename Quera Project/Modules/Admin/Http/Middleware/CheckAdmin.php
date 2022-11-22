<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request for being admin
     .
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if(auth()->user()->isAdmin()){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
