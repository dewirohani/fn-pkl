<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api'.'/teachers')->json();
            // dd($data);
            $teachers = json_decode(json_encode($data))->teachers;
        if($request->ajax()){
            return DataTables::of($teachers)
                            ->addColumn('nip', function($row){
                                return $row->nip;
                            })
                            ->addColumn('name', function($row){
                                return $row->name;
                            })                         
                            ->addColumn('address', function($row){
                                return $row->address;
                            })
                            ->addColumn('place_of_birth', function($row){
                                return $row->place_of_birth;
                            })
                            ->addColumn('date_of_birth', function($row){
                                return $row->date_of_birth;
                            })
                            ->addColumn('gender', function($row){
                                return $row->gender;
                            })
                            ->addColumn('religion', function($row){
                                return $row->religion;
                            })
                            ->addColumn('phone', function($row){
                                return $row->phone;
                            })                           
                            ->addColumn('action', function($row){

                                $btn =      '<a href="'.route('teachers.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.master.guru.index', compact('teachers'));
        // return view('admin.master.guru.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/teachers/'.$id.'/edit')->json();
            $teacher = json_decode(json_encode($data))->teacher;
            // dd($teacher);
        
        return view('admin.master.guru.edit', compact(
            'teacher'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
