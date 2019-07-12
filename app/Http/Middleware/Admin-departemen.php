<?php

namespace App\Http\Middleware;

use Closure;

class Admin_departmen
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
        if ($request->user() && $request->user()->role != 'admin-departemen')
        {
            return redirect('forbid');
        }
        return $next($request);

    }
}
