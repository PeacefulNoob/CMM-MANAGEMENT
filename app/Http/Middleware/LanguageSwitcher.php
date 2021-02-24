<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
class LanguageSwitcher
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
        if (!Session::has('locale'))
         {
           Session::put('locale',Config::get('app.locale'));
        }
        App::setLocale($request->segment(1));
        return $next($request);

       /* 
     //   app()->setLocale($request->segment(1));
        //App::setLocale(session('locale'));
      //  dd( app()->getLocale());
        return $next($request); 
        app()->setLocale($request->segment(1));
        return $next($request); */


     /*   if ($request->method() === 'GET') {
            $segment = $request->segment(1);

            if (!in_array($segment, config('app.languages'))) {
                $segments = $request->segments();
                $fallback = session('locale') ?: config('app.fallback_locale');
                $segments = array_prepend($segments, $fallback);

                return redirect()->to(implode('/', $segments));
            }

            session(['locale' => $segment]);
            app()->setLocale($segment);
        }  */

     // app()->setLocale($request->segment(1));

        
    }
}
