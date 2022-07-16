<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('authenticated');
    }

    

   
    public function index()
    {   
            return view('admin.dashboard');
    }

    public function guru()
    {
        return view('guru.dashboard');
    }

    public function siswa()
    {
        return view('siswa.dashboard');
    }

}
