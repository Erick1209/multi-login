<?php

namespace App\Http\Middleware;

use Closure;

class DeniedIfNotApplicant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'applicant_user')
    {
        if (! \Auth::guard($guard)->check()) {
         return redirect('/applicant_login');
        }
        return $next($request);
    }
}
