<?php

namespace App\Http\Middleware;

use Closure;

class CheckRequestToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        return $next($request);
        // if($request->has('token') && 
        //     $request->input('token')=='1234567890'){
        // return $next($request);
        //  }

        //  return redirect(url('login'));
    }
}
