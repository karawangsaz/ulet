<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekLogin
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
        
        // Jika belum login
        if (!Auth::check()) {
            return redirect('login')->with('login_is_required', 'Login is required!');
        }

        return $next($request);
    }
}
