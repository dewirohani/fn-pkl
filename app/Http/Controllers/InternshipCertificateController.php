<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class InternshipCertificateController extends Controller
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
            ])->get('http://localhost/pa/backend/public/api'.'/certificates')->json();
            // dd($data);
            
            $internship_certificate = json_decode(json_encode($data))->internship_certificate;
        if($request->ajax()){
            return DataTables::of($internship_certificate)
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })                            
                            ->addColumn('file', function($row){
                                $btnfile = '<a href="'.$row->file.'" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a>';
                                return $btnfile;
                            })
                            ->addColumn('action', function($row){

                                // $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-eye"></i></span></a>';
                                $btn = '<a href="'.route('internship-certificates.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            
                            ->rawColumns(['action','file'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.sertifikat.index', compact('internship_certificate'));
        // return view('admin.sertifikat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('admin.sertifikat.create', compact('students','teachers'));
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
            ])->get('http://localhost/pa/backend/public/api/certificates/'.$id.'/edit')->json();
            $certificates = json_decode(json_encode($data))->certificates;
        // $dataStudent = Http::withHeaders([
        //     'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
        //     'ContentType' => 'application/json',
        //     'Accept' => 'application/json',
        //     ])->get('http://localhost/pa/backend/public/api/students')->json();
        //     $students = json_decode(json_encode($dataStudent))->students;
        // $dataTeacher = Http::withHeaders([
        //     'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
        //     'ContentType' => 'application/json',
        //     'Accept' => 'application/json',
        //     ])->get('http://localhost/pa/backend/public/api/teachers')->json();
        //     $teachers = json_decode(json_encode($dataTeacher))->teachers;
            return view('admin.sertifikat.edit', compact(
                'certificates'
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
