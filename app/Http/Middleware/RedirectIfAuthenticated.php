<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //return redirect(RouteServiceProvider::HOME);
            $role = Auth::user()->role_id;
            switch ($role) {
                case 1:
                    return redirect()->route('root');
                    break;
                    
                case 2:
                    return redirect()->route('admin');
                    break;
                
                case 3:
                    return redirect()->route('supervisor');
                    break;
                case 4:
                    return redirect()->route('audit-users'); 
                    break;  
            }
        }

        return $next($request);
    }
}
