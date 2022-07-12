<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Http;

class SiswaMiddleware
{
  
    public function handle(Request $request, Closure $next) {
    // dd($request->cookie('token'));
    $auth = Http::withHeaders([
        'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
        'ContentType' => 'application/json',
        'Accept' => 'application/json',
    ])->get('http://localhost/pa/backend/public/api/user')->json();
    // dd($request);
    $user = json_decode(json_encode($auth))->data;
    if ($user->level_id != 3) {
        return redirect('/login')->with('error','You have not siswa access');
    }
    return $next($request);
}
}
