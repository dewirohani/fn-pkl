<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class ProfileController extends Controller
{
    public function show(Request $request, $id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json', 
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/students/'.$id)->json();            
            $profile = json_decode(json_encode($data));
            // dd($profile);

            $i = 1;

        return view('siswa.profile.index', compact(
            'profile', 'i', 
        ));
        // return view('admin.pkl.periode.index');
    }

    public function showGuru(Request $request, $id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6',strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json', 
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/teachers/'.$id)->json();            
            $profile = json_decode(json_encode($data));
            // dd($profile);

            $i = 1;

        return view('guru.profile.index', compact(
            'profile', 'i', 
        ));
        // return view('admin.pkl.periode.index');
    }

    

}
