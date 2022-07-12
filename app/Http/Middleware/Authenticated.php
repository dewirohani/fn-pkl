<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Http;

class Authenticated
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
        // dd($request->cookie('token'));
        // $str = substr($request->Header('cookie'));
        // substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";"))

        $auth = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
        ])->get('http://localhost/pa/backend/public/api/user')->json();
        // $user = json_decode(json_encode($auth))->data;
        // dd(substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")));
        // dd($auth);
        if ($auth['message'] != "Authenticated.") { 
            return redirect()->to('/login');
        }
        return $next($request);
        
    }
}
