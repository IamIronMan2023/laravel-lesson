<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmployeeAcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $employeeId): Response
    {
        //$request->input('page')

        if ($request->route('id') == 5) {
            return redirect()->route('restricted');
            //return response('This information is confidential');
        }
        return $next($request);
    }
}
