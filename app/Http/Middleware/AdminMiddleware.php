<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user(); // ambil user saat ini

        if ($user && $user->role === 'admin') {
            return $next($request);
        }

        // kalau bukan admin atau belum login
        return redirect('/')->with('error', 'Anda tidak punya akses ke halaman ini.');
    }
}
