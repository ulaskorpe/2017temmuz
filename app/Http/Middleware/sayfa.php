<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
class sayfa
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

        $sayfa=Session::get('sayfa',Config::get('app.sayfa'));
        App::setsayfa($sayfa);
        return $next($request);
    }
}
