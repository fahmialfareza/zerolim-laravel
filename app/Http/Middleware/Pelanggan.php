<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Pelanggan
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
        if (Auth::check() && Auth::user()->role == "PELANGGAN") {
          return $next($request);
        }

        return redirect('/');
    }
}
