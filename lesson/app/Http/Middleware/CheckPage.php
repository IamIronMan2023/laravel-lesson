<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $page): Response
    {
        if ($request->input('page') == $page) {
            //return redirect()->route('home');
            //return response('you do not have access to this page');
            return redirect()->route('home.restricted');
        }

        return $next($request);
    }
}
