<?php

namespace App\Http\Middleware;

use Closure;
//
use Auth;

class Guest
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
        $user = Auth::user();
        //dd($user->type->name);
        if($user->type->id != 2){
            //return view("guest")->with("msj","No tiene suficientes Privilegios para acceder a esta seccion");
            $msg = 'No eres Admin';
            return redirect()->route('denegado', [$msg]);
        }
        return $next($request);
    }
}
