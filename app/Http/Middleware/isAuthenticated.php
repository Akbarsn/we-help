<?php

namespace App\Http\Middleware;

use Closure;

class isAuthenticated
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
        if ($request->session()->get('login')) {
            return $next($request);
        }

        return redirect(url('login'))->with('error', 'Silahkan login terlebih dahulu');
    }
}
