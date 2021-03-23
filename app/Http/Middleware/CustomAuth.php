<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class CustomAuth
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
        
        // $path = $request->path();
        // if(($path="/allstudent")){
        //         return redirect('/student_dashboard');
        // }
        // $this->middleware('auth');

        return $next($request);
    }
}
