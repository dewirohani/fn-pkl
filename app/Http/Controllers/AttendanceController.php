<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class AttendanceController extends Controller
{
    
    public function index(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api'.'/attendances')->json();
            
            $attendance = json_decode(json_encode($data))->attendance;
        if($request->ajax()){
            return DataTables::of($attendance)                          
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })
                            ->addColumn('date', function($row){
                                return $row->date;
                            })
                            ->addColumn('time_in', function($row){
                                return $row->time_in;
                            })                          
                            ->addColumn('time_out', function($row){
                                return $row->time_out;
                            })                          
                            ->addColumn('description', function($row){
                                return $row->description;
                            })
                            ->addColumn('action', function($row){

                                // $btn = '<a href="'.route('attendances.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                // $btn .='&nbsp';
                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
           
                if ($auth->level_id == 2){ 
                    $data = Http::withHeaders([
                        'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                        'ContentType' => 'application/json',
                        'Accept' => 'application/json',
                        ])->get('http://192.168.43.215:8000/api'.'/attendances')->json();
                        
                        $attendance = json_decode(json_encode($data))->attendance;
                        if($request->ajax()){
                            return DataTables::of($attendance)                          
                                            ->addColumn('student_id', function($row){
                                                return $row->student->name;
                                            })
                                            ->addColumn('teacher_id', function($row){
                                                return $row->teacher->name;
                                            })
                                            ->addColumn('date', function($row){
                                                return $row->date;
                                            })
                                            ->addColumn('time_in', function($row){
                                                return $row->time_in;
                                            })                          
                                            ->addColumn('time_out', function($row){
                                                return $row->time_out;
                                            })                          
                                            ->addColumn('description', function($row){
                                                return $row->description;
                                            })
                                            ->addColumn('action', function($row){
                
                                                // $btn = '<a href="'.route('attendances.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                                // $btn .='&nbsp';
                                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                                 return $btn;
                                            })
                                            ->rawColumns(['action'])
                                            ->addIndexColumn()
                                            ->make(true);
                            }
                            return view('guru.attendance.index', compact('attendance'));
                        }elseif ($auth->level_id == 3) {
                            $data = Http::withHeaders([
                                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                                'ContentType' => 'application/json',
                                'Accept' => 'application/json',
                                ])->get('http://192.168.43.215:8000/api'.'/attendances-student')->json();
                                $attendances = json_decode(json_encode($data))->attendances;
                                // dd($data);
                            $dataToday = Http::withHeaders([
                                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                                'ContentType' => 'application/json',
                                'Accept' => 'application/json',
                                ])->get('http://192.168.43.215:8000/api'.'/attendances-today')->json();
                                $atd = json_decode(json_encode($dataToday))->atd;
                        return view('siswa.attendance.index', compact('attendances','atd'));
                            }else{
                    return view('admin.attendance.index', compact('attendance'));
                }
            }
        // return view('admin.attendance.index');
   
    

   
    public function create(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api/user')->json();
        $auth = json_decode(json_encode($user))->data;

        $dataStudent = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api/students')->json();
            $students = json_decode(json_encode($dataStudent))->students;
        // $dataTeacher = Http::withHeaders([
        //     'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
        //     'ContentType' => 'application/json',
        //     'Accept' => 'application/json',
        //     ])->get('http://192.168.43.215:8000/api/teachers')->json();
        //     $teachers = json_decode(json_encode($dataTeacher))->teachers;
        if ($auth->level_id == 1) {
            // return view('admin.logbook.create', compact('students','teachers'));
                return view('admin.attendance.create', compact('students'));            
            } else if ($auth->level_id == 3){
                return view('siswa.attendance.create', compact('students'));
            }
        // return view('admin.attendance.create');
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
        return view('admin.attendance.edit', compact(
            'id'
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
