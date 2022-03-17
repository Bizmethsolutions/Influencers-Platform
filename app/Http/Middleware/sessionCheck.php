<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class sessionCheck
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
        if(!Session::get('email')){
            return $next($request);
        }
        elseif(Session::get('email') && Session::get('type') == 'Admin'){
            return redirect('/cms/dashboard');
        }
        else{
            return redirect('/dashboard');
        }
        
    }
}
