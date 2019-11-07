<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
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

        if($user->role == "bendahara")
            return $next($request);

        foreach($roles as $role) {
            if($user->hasRole($role))
                return $next($request);
        }

    return redirect('/');
    }
}
