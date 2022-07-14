<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(!auth()->check() || auth()->user()->role->name != $role){
             return redirect()->route('home');
        }
        return $next($request);
    }
}
