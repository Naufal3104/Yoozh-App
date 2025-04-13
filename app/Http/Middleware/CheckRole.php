<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();
        $currentRoute = $request->route()->getName();
        
        // Only redirect if not already on the correct route
        if ($user->role === 1 && $currentRoute !== 'dashboard') {
            return redirect()->route('dashboard');
        }
        
        if ($user->role === 0 && $currentRoute !== 'landing') {
            return redirect()->route('landing');
        }

        return $next($request);
    }
}
