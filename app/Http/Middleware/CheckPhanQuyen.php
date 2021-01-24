<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CheckPhanQuyen
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
        if (Auth::guard('user')->check() && Auth::guard('user')->user()->phan_quyen == 1) {
            return $next($request);
        } else {
            return redirect()->route("Index.index");
        }
    }
}
