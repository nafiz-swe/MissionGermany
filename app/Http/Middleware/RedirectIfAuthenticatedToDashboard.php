<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedToDashboard
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/dashboard'); // তোমার dashboard route
        }

        return $next($request);
    }
}
