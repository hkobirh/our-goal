<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->age == 18){
            echo 'Age: 18';
        }elseif ($request->age == 30){
            echo 'Age: 30';
        }else{
            echo 'You are over aged';
        }
        return $next($request);
    }
}
