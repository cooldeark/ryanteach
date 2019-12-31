<?php

namespace App\Http\Middleware;

use Closure;

class RyanMiddleware
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

        date_default_timezone_set("Asia/Taipei");
        // $fuckTime=date("h.i:sa");//take current time
        $fuckTime=date("i");
        
        if($fuckTime%2!=0){
            return $next($request);
        }else{
            abort(403, '廢物你不能進來哦>_^');
        }
        
    }
}
