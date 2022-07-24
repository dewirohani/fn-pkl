<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    $user = Http::withHeaders([
        'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
        'ContentType' => 'application/json',
        'Accept' => 'application/json',
    ])->get('http://192.168.43.215:8000/api/user')->json();
    // dd($user);
    $auth = json_decode(json_encode($user))->data;
    
    if ($auth->level_id == 1) {
        return view('admin.home');    
    } else if ($auth->level_id == 2) {
        return view('guru.home');
    } else if ($auth->level_id == 3) {
        return view('siswa.home');
    }
}

    

}
