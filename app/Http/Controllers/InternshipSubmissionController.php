<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class InternshipSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api'.'/submissions')->json();
            // dd($data);
            
            $internshipSubmissions = json_decode(json_encode($data))->internshipSubmissions;
        if($request->ajax()){
            return DataTables::of($internshipSubmissions)
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })
                            ->addColumn('grade_id', function($row){
                                return $row->grade->name;
                            })
                            ->addColumn('major_id', function($row){
                                return $row->major->name;
                            })
                            ->addColumn('period_id', function($row){
                                return $row->period->nama_periode;
                            })
                            ->addColumn('internship_place_id', function($row){
                                return $row->internship_place->name;
                            })
                            ->addColumn('status_id', function($row){
                                return $row->internship_submission_status->name;
                            })
                            ->addColumn('file', function($row){
                                $btnfile = '<a href="'.$row->file.'" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a>';
                                return $btnfile;
                            })
                            ->addColumn('action', function($row){

                                // $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-eye"></i></span></a>';
                                $btn = '<a href="'.route('internship-submissions.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            
                            ->rawColumns(['action','file'])
                            ->addIndexColumn()
                            ->make(true);
            }
            if ($auth->level_id == 3) {
            $data = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://192.168.43.202:8000/api'.'/submission-students')->json();
                // dd($data);
                
                $internshipSubmission = json_decode(json_encode($data))->internshipSubmission;
                // dd($internshipSubmission);
                return view('siswa.pkl.pengajuan.index', compact('internshipSubmission'));
            }else{
                return view('admin.pkl.pengajuan.index', compact('internshipSubmissions'));
            }
        // return view('admin.pkl.pengajuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = \Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        $dataStudent = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/students')->json();
            $students = json_decode(json_encode($dataStudent))->students;
        $dataPeriod = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api'.'/periods')->json();
            $periods = json_decode(json_encode($dataPeriod))->periods;
        $dataPlace = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api'.'/places')->json();
            // dd($data);
            $internship_places = json_decode(json_encode($dataPlace))->internship_places;
       
        if ($auth->level_id == 1) {                
            return view('admin.pkl.pengajuan.create', compact('students','periods','internship_places'));
        } else if ($auth->level_id == 2){
            return view('guru.pkl.pengajuan.create', compact('students','periods','internship_places'));
        } else if ($auth->level_id == 3){
            return view('siswa.pkl.pengajuan.create', compact('students','periods','internship_places'));
        }
    
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

    public function edit(Request $request, $id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/submissions/'.$id.'/edit')->json();
            // dd($data);
            $submission = json_decode(json_encode($data))->submission;
        $dataStatuses = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/submissions-statuses')->json();
            // dd($data);
            $internshipSubmissionStatus = json_decode(json_encode($dataStatuses))->internshipSubmissionStatus;
        
        
        return view('admin.pkl.pengajuan.edit', compact(
            'submission','internshipSubmissionStatus'
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
