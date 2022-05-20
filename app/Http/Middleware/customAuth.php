<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class customAuth
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
        if($path=="login" && Session::get('email')){
            return redirect('/');
        }
        else if(($path!="login" && !Session::get('email')) && ($path!="register" && !Session::get('email'))){
            return redirect('/');
        }
        
        return $next($request);
    }
}
