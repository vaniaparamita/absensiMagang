<?php

namespace App\Http\Middleware;

use Closure;

class AdminGM
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
        if ($request->user() && $request->user()->role != 'admin-gm')
        {
            return redirect('forbid');
        }
        return $next($request);

    }
}
