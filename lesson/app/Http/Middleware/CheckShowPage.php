<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckShowPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $employeeId): Response
    {
        if ($request->route('id') == $employeeId) {
            return redirect()->route('home.restricted');
        }

        //dd($request);
        return $next($request);
    }
}
