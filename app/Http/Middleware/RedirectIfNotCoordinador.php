<?php
namespace App\Http\Middleware;
use Closure;

class RedirectIfNotCoordinador
{
    
    /** Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
     
    public function handle($request, Closure $next, $guard="coordinador")
    {
        if(!auth()->guard($guard)->check()) {
          return view('pages.main')->with('msj', 'Contraseña incorrecta');
        }
        return $next($request);
    }
}