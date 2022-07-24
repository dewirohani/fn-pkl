<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Http;

class authenticated
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
        $auth = Http::withHeaders([
            'Authorization' => 'Bearer '.$request->cookie('token'),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
        ])->get('http://192.168.43.215:8000/api/user')->json();
        if ($auth['message'] != "Authenticated.") {
            return redirect()->to('/login');
        }
        return $next($request);
    }
}