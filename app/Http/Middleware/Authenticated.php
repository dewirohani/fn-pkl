<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Http;

class Authenticated
{
    public function handle(Request $request, Closure $next)
    {
        $auth = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
        ])->get('http://192.168.43.202:8000/api/user')->json();
       
        if ($auth['message'] != "Authenticated.") { 
            return redirect()->to('/login');
        }
        return $next($request);
    }
}
