<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAgeUser
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
            
            if(!Auth::check()){
                    return redirect('dangnhap1');

            }
            else{
               $a=Auth::user();
               $b=$a->level;
               if($b==1){ 
              return $next($request);}
              else{
                Auth::logout();
                 return redirect('dangnhap1');
              }
            }
    }
}
