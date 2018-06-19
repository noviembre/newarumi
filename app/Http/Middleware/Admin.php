<?php

namespace App\Http\Middleware;

use Session;
use Auth;

use Closure;

#----------------------------------------------------------------------------
#============= 01 ==========  Crear: php artisan make:middleware Admin ======
#----------------------------------------------------------------------------

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
        #--- Si el usuario no es un admin
        if(!Auth::user()->admin)
        {
            #----- Envie este mensaje
            Session::flash('info','No tiene los permisos necesarios para realizar esta accion');

            #----- y que el usuario regrese a la ruta de donde estaba viniendo
            return redirect()->back();
        }

        return $next($request);
    }
}
