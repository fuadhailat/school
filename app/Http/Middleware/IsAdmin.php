<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;




use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->email === 'pro@gmail.com') {
            return $next($request);
        }

        return redirect('/');
    }
}
