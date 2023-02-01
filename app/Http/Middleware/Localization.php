<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if (session()->has('locale')) {
        //     if (in_array(session()->get('locale'), ['en', 'es', 'fr'])) {
        //         App::setLocale(session()->get('locale'));
        //     }
        // }

        if (in_array($request->segment(1), ['en', 'es', 'fr'])) {
            // error_log($request->segment(1));
            // abort(404);
            app()->setLocale($request->segment(1));
        }

        // app()->setLocale($request->segment(1));
        return $next($request);
    }
}
