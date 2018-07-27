<?php

namespace App\Http\Middleware;

use Closure;

class BadWords
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
        $message=$request->get('content');
        $bad_words=['hate', 'idiot',  'stupid'];
        $pattern = '/' . implode('|', $bad_words) . '/x';
        if (preg_match($pattern, $message))
        {
         return response(view('auth.forbidden-comment'));
        }

        return $next($request);
    }
}
