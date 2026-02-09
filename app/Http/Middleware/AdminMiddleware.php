<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // ако не е најавен или не е админ
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
