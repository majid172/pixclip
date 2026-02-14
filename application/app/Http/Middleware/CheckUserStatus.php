<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->status != 1) {
             // Allow logout and the approval notice page itself to prevent redirect loops
            if ($request->routeIs('approval.notice') || $request->routeIs('logout')) {
                return $next($request);
            }
            return redirect()->route('approval.notice');
        }

        return $next($request);
    }
}
