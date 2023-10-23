<?php

namespace App\Http\Middleware;

use App\Models\Staff;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
        if (Auth::guard('staff')->check()) {
            $ignoredRoutes = [
                'system.dashboard',
                'system.test',
                'login',
                'logout',
                'system.misc.ajax',
                'system.staff.change-password',
                'system.staff.change-password-post',
                'system.notifications.url',
                'system.notifications.index',

                'fontawsome.create',
                'fontawsome.store',
                'fontawsome.edit',

            ];

            $canAccess = array_merge($ignoredRoutes,Staff::StaffPerms(Auth::guard('staff')->user()->id)->toArray());


            if (!in_array(Route::currentRouteName(),$canAccess)){
                abort(401, 'Unauthorized.');
            }
        }

        return $next($request);
    }
}
