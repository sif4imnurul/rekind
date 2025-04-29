<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // tambah ini

class IsUserB
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user login dan rolenya admin
        if (Auth::check() && Auth::user()->role === 'userb' || Auth::user()->role === 'userk' ) {
            return $next($request);
        }

        // Kalau bukan admin, bisa redirect atau abort
        abort(403, 'Unauthorized');
    }
}
