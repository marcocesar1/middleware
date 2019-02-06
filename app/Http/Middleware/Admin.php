<?php

namespace App\Http\Middleware;

use Closure;
//
use Auth;

class Admin
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
        if($user->type->id != 1){
            //return view('admin')->with('msg', 'Bienvenido usuario invitado');
            return redirect()->route('denegado');
        }
        return $next($request);
    }
}
