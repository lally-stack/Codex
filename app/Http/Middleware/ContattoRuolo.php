<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContattoRuolo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$requiredRuoli)
    {
        abort_if(0 === count(array_intersect($requiredRuoli, $request["contattoRuolo"])), 403, "Non hai accesso a questa risorsa");
        return $next($request);
    }
}
