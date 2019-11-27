<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isMaster
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
        if (!Auth::check()) 
        return redirect('/');

        $user = Auth::user();

        if($user->role == "master")
            return $next($request);

        foreach($roles as $role) {
            if($user->hasRole($role))
                return $next($request);
        }

    return redirect('/');
    }
}
