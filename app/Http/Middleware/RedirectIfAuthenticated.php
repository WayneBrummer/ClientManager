<?php
/**
 * ClientManager.
 *
 * @file RedirectIfAuthenticated.php
 * @project ClientManager
 *
 * @author Wayne Brummer
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param null|string              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
//            return redirect('/home');
        }

        return $next($request);
    }
}
