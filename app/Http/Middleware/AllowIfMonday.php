<?php

namespace App\Http\Middleware;

use Closure;

class AllowIfMonday
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
        $date = date('N');

        if ($date != 1) {
            return redirect('/monday');
        }
        return $next($request);
    }
}
