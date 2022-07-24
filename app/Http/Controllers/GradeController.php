<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class GradeController extends Controller
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
            ])->get('http://192.168.43.215:8000/api'.'/grades')->json();
            $grades = json_decode(json_encode($data))->grades;
            // dd($grades);
        if($request->ajax()){
            return DataTables::of($grades)
                            ->addColumn('name', function($row){
                                return $row->name;
                            })
                            ->addColumn('major_id', function($row){
                                return $row->major->name;
                            })
                            ->addColumn('total_students', function($row){
                                return $row->total_students;
                            })
                            ->addColumn('description', function($row){
                                return $row->description;
                            })
                            ->addColumn('action', function($row){

                                $btn = '<a href="'.route('grades.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .='<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.master.kelas.index', compact('grades'));
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
            ])->get('http://192.168.43.215:8000/api/majors')->json();
            $majors = json_decode(json_encode($data))->majors;
        return view('admin.master.kelas.create', compact('majors'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api/grades/'.$id.'/edit')->json();

            $grade = json_decode(json_encode($data))->grade;
            // dd($grade);
            $dataMajor = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://192.168.43.215:8000/api/majors')->json();
                $majors = json_decode(json_encode($dataMajor))->majors;
        
        return view('admin.master.kelas.edit', compact(
            'grade','majors'
        ));
    }

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
