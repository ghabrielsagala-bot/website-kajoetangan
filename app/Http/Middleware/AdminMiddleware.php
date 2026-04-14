<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        // Check if admin_id exists in session
        if (! session()->has('admin_id')) {
            return redirect()->route('login.form')->with('error', 'Anda harus login terlebih dahulu');
        }

        return $next($request);
    }
}
