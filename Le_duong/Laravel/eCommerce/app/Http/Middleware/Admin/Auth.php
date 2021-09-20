<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $currentUser = auth()->user();
        if($currentUser->email == 'admin@gmail.com')
        {
          return $next($request);
        }
        return redirect('/account');
    }
}
