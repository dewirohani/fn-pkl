<?php

namespace App\Http\Controllers;
use DataTables;
use Http;

use Illuminate\Http\Request;

class StudentController extends Controller
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
            ])->get('http://192.168.43.202:8000/api'.'/students')->json();
            // dd($data);
            $students = json_decode(json_encode($data))->students;
        if($request->ajax()){
            return DataTables::of($students)
                            ->addColumn('nis', function($row){
                                return $row->nis;
                            })
                            ->addColumn('name', function($row){
                                return $row->name;
                            })
                            ->addColumn('username', function($row){
                                return $row->user->username;
                            })
                            ->addColumn('email', function($row){
                                return $row->user->email;
                            })
                            ->addColumn('grade_id', function($row){
                                return $row->grade->name;
                            })
                            ->addColumn('major_id', function($row){
                                return $row->major->name;
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
                            ->addColumn('year_of_entry', function($row){
                                return $row->year_of_entry;
                            })
                            ->addColumn('action', function($row){

                                $btn = '<a href="'.route('students.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.master.siswa.index', compact('students'));

        // return view('admin.master.siswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/grades')->json();
            $grades = json_decode(json_encode($data))->grades;
        return view('admin.master.siswa.create', compact('grades'));
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
    public function edit(Request $request, $id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/students/'.$id.'/edit')->json();
            $student = json_decode(json_encode($data))->student;
            // dd($student);
        
        return view('admin.master.siswa.edit', compact(
            'major'
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
