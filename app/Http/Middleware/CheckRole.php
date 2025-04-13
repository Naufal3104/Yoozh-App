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
        
        // Define allowed routes for each role
        $adminRoutes = ['dashboard', 'products.index', 'products.create', 
                       'products.edit', 'products.destroy', 'category.index',
                       'category.create', 'category.edit', 'category.destroy'];
        
        // Only redirect if trying to access unauthorized routes
        if ($user->role === 1 && !in_array($currentRoute, $adminRoutes)) {
            return redirect()->route('dashboard');
        }
        
        if ($user->role === 0 && $currentRoute !== 'landing') {
            return redirect()->route('landing');
        }

        return $next($request);
    }
}
