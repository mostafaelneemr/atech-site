<?php

namespace App\Http\Middleware;

use Closure;

class CloudControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (setting('system_status') != 'active') {
            abort(403,'Access Denied :(');
        }

        return $next($request);
    }
}
