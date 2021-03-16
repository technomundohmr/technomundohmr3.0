<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('loginCMS')->check()) {
            return redirect(RouteServiceProvider::CMSADMIN);
        }
        if (Auth::guard('afiliado')->check()) {
            return redirect(RouteServiceProvider::AFILIADO);
        }

        return $next($request);
    }
}
