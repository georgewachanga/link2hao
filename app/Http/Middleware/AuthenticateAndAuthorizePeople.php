<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateAndAuthorizePeople
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $action)
    {

        if(!Auth::check())
        {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }
        if(\Gate::denies($action))
        {
            app()->abort(403);
        }
        return $next($request);
    }
}
