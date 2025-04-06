<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//The middleware checks whether the user is authenticated using the admin guard (i.e., whether the admin is logged in).
class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            // If the admin is not authenticated, the middleware redirects the user to the admin login page (admin.login route).
            return redirect()->route('admin.login');
        }
     //If the admin is authenticated, the middleware allows the request to proceed to the next step
        return $next($request);
    }
}
