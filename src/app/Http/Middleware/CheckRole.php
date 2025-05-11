<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class CheckRole
{
    public function handle(Request $request, Closure $next,...$roles): Response
    {
        $user = $request->user();

        if (!in_array(auth()->user()->role, $roles)) {
            abort(403, 'Acceso denegado');
        }
        return $next($request);
    }
}
