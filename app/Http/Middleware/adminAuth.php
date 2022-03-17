<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class adminAuth
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
        $path = $request->path();
        if($path=="cms" && Session::get('email')){
            return redirect('/cms/dashboard');
        }
        else if(($path!="cms" && !Session::get('email'))){
            return redirect('/cms');
        }
        return $next($request);
    }
}
