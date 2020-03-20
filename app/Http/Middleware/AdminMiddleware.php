<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(auth()->user()==null){
            return redirect()->route('logout');
        }else if(auth()->user()->user_type == 0){
            return $next($request);
        }else{
            return redirect()->route('logout');
        }


        // if(auth()->user()->user_type == 0){
        //     return $next($request);
        // }
        return redirect()->route('logout');
    }
}
