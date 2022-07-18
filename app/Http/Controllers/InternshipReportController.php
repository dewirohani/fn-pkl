<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class InternshipReportController extends Controller
{
    public function index(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        if($auth->level_id == 1){
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api'.'/reports')->json();            
            $internshipReports = json_decode(json_encode($data))->internshipReports;
        if($request->ajax()){
            return DataTables::of($internshipReports)                          
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })                        
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })                                                  
                            ->addColumn('status_id', function($row){
                                return $row->status->name;
                            })
                            ->addColumn('file', function($row){
                                $btnfile = '<a href="'.$row->file.'" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a>';
                                return $btnfile;
                            })
                            ->addColumn('description', function($row){
                                return $row->description;
                            })
                            ->addColumn('action', function($row){                                
                                $btn = '<a href="'.route('reports.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            
                            ->rawColumns(['action','file'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.report.index', compact('internshipReports'));
         }elseif($auth->level_id == 2){
                $data = Http::withHeaders([
                    'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                    'ContentType' => 'application/json',
                    'Accept' => 'application/json',
                    ])->get('http://localhost/pa/backend/public/api'.'/reports')->json();            
                    $internshipReports = json_decode(json_encode($data))->internshipReports;
                if($request->ajax()){
                    return DataTables::of($internshipReports)                          
                                    ->addColumn('student_id', function($row){
                                        return $row->student->name;
                                    })                        
                                    ->addColumn('teacher_id', function($row){
                                        return $row->teacher->name;
                                    })                                                  
                                    ->addColumn('status_id', function($row){
                                        return $row->status->name;
                                    })
                                    ->addColumn('file', function($row){
                                        $btnfile = '<a href="'.$row->file.'" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a>';
                                        return $btnfile;
                                    })
                                    ->addColumn('description', function($row){
                                        return $row->description;
                                    })
                                    ->addColumn('action', function($row){                                
                                        $btn = '<a href="'.route('reports-guru.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';                                       
                                         return $btn;
                                    })
                                    
                                    ->rawColumns(['action','file'])
                                    ->addIndexColumn()
                                    ->make(true);
                    }
                return view('guru.report.index', compact('internshipReports'));
            }elseif($auth->level_id == 3) {
                $data = Http::withHeaders([
                    'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                    'ContentType' => 'application/json',
                    'Accept' => 'application/json',
                    ])->get('http://localhost/pa/backend/public/api'.'/reports')->json();   
                    // dd($data);         
                    $internshipReports = json_decode(json_encode($data))->internshipReports;
                    return view('siswa.report.index', compact('internshipReports'));
                }
            
        // return view('admin.logbook.index');
    }

  
    public function create(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        $dataStudent = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/students')->json();
            $students = json_decode(json_encode($dataStudent))->students;
            if ($auth->level_id == 1) {
                return view('admin.report.create', compact('students'));            
            } else if ($auth->level_id == 3){
                return view('siswa.report.create');            
            }
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
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        if($auth->level_id == 1){
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://localhost/pa/backend/public/api/reports/'.$id.'/edit')->json();
            // dd($data);
            $internshipReport = json_decode(json_encode($data))->internshipReport;
            $dataStatuses = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://localhost/pa/backend/public/api/report-statuses')->json();
                // dd($dataStatuses);
                $internshipReportStatuses = json_decode(json_encode($dataStatuses))->internshipReportStatuses;
            return view('admin.report.edit', compact('internshipReport','internshipReportStatuses'));
        }elseif($auth->level_id == 2){
            $data = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://localhost/pa/backend/public/api/reports/'.$id.'/edit')->json();
                // dd($data);
                $internshipReport = json_decode(json_encode($data))->internshipReport;
                $dataStatuses = Http::withHeaders([
                    'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                    'ContentType' => 'application/json',
                    'Accept' => 'application/json',
                    ])->get('http://localhost/pa/backend/public/api/report-statuses')->json();
                    // dd($dataStatuses);
                    $internshipReportStatuses = json_decode(json_encode($dataStatuses))->internshipReportStatuses;
                return view('guru.report.edit', compact('internshipReport','internshipReportStatuses'));
        }
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
