<?php

namespace App\Http\Middleware;

use Closure;

class AdminDepartemen
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
