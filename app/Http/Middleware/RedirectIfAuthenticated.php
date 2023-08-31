<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // if (Auth::user()->username=='Admin') {
                //     return redirect()->route("auth.ui.home",Auth::user()->username);
                // } else{
                //     return '/home';
                // }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}

// public function redirectTo(){
//     if (Auth::user()->roles()->pluck('name')->contains('admin')) {
//         return '/admin/welcome';
//     } elseif(Auth::user()->roles()->pluck('name')->contains('auteur')){
//         return '/admin/welcome';
//     }else{
//         return '/home';
//     }

// }
