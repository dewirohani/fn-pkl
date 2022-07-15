<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class LogbookController extends Controller
{

    public function index(Request $request)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api'.'/logbooks')->json();
            
            // dd($data);
            $logbooks = json_decode(json_encode($data))->logbooks;
        if($request->ajax()){
            return DataTables::of($logbooks)
                            // ->addColumn('attendance_id', function($row){
                            //     return $row->attendance_id;
                            // })
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })                        
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })
                            ->addColumn('date', function($row){
                                return $row->date;
                            })
                            ->addColumn('activity', function($row){
                                return $row->activity;
                            })
                            ->addColumn('status_id', function($row){
                                return $row->logbook_statuses->name;
                            })
                            ->addColumn('file', function($row){
                                $btnfile = '<a href="'.$row->file.'" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a>';
                                return $btnfile;
                            })
                            ->addColumn('action', function($row){

                                // $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-eye"></i></span></a>';
                                $btn = '<a href="'.route('logbooks.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            
                            ->rawColumns(['action','file'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.logbook.index', compact('logbooks'));
        // return view('admin.logbook.index');
    }

  
    public function create(Request $request)
    {
        $dataStudent = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/students')->json();
            $students = json_decode(json_encode($dataStudent))->students;
        $dataTeacher = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/teachers')->json();
            $teachers = json_decode(json_encode($dataTeacher))->teachers;
        return view('admin.logbook.create', compact('students','teachers'));
        // return view('admin.logbook.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/logbooks/'.$id.'/edit')->json();
            // dd($data);
            $logbook = json_decode(json_encode($data))->logbook;
            $dataStatuses = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://localhost/pa/backend/public/api/logbook-statuses')->json();
                // dd($data);
                $logbookStatuses = json_decode(json_encode($dataStatuses))->logbookStatuses;
            return view('admin.logbook.edit', compact(
                'logbook','logbookStatuses'
            ));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
