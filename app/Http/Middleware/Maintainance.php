<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class Maintainance {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $crediantials = DB::table('crediantials')->select('live')->first();
        if (($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'techsquareindia.com') && @$crediantials->live == 0) {
            return redirect('construction');
        } else {
            return $next($request);
        }
    }

}
