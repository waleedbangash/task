<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UsersMiddleware
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
        if(!$request->session()->has('users'))
        {
            return redirect('users/login');
            $request->session()->flash('msg','you can not access without login');
        }

        return $next($request);
    }
}
