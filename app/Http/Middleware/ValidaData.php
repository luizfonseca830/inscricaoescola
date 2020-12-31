<?php

namespace App\Http\Middleware;

use Closure;

class ValidaData
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->status_liberar == '1'
            || $request->data_final >= now() && $request->data_inicial <= now()
            || $request->data_final == null && $request->data_inicial <= now())
        {


            return $next($request);
        }

        return redirect()->route('inical');
    }
}
