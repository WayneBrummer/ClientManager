<?php
/**
 * ClientManager.
 *
 * @file RedirectIfNotUser.php
 * @project ClientManager
 *
 * @author Wayne Brummer
 */

/**
 * ClientManager.
 *
 * @file RedirectIfNotUser.php
 * @project ClientManager
 *
 * @author Wayne Brummer
 */

/**
 * ClientManager.
 *
 * @project ClientManager
 * @description
 *
 * @author Wayne Brummer
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotUser
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
    public function handle($request, Closure $next, $guard = 'user')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('user/login')
                ->with('error', 'You need to log in first!');
        }

        return $next($request);
    }
}
