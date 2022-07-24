<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class InternshipPlacementController extends Controller
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
            ])->get('http://192.168.43.215:8000/api/user')->json();
        $auth = json_decode(json_encode($user))->data;
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.215:8000/api'.'/internship-placements')->json();
            
            $internshipPlacements = json_decode(json_encode($data))->internshipPlacements;
        if($request->ajax()){
            return DataTables::of($internshipPlacements)
                            ->addColumn('internship_submission_id', function($row){
                                return $row->internship_submission_id;
                            })
                            ->addColumn('student_id', function($row){
                                return $row->student->name;
                            })
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
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
                            ->addColumn('action', function($row){

                                // $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-eye"></i></span></a>';
                                // $btn = '<a href="'.route('internship-placements.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                // $btn .='&nbsp';
                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';
                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            if ($auth->level_id == 3) {
                $data = Http::withHeaders([
                    'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                    'ContentType' => 'application/json',
                    'Accept' => 'application/json',
                    ])->get('http://192.168.43.215:8000/api'.'/internship-placements')->json();
                    // dd($data);
                    
                    $internshipPlacements = json_decode(json_encode($data))->internshipPlacements;
                    return view('siswa.pkl.penempatan.index', compact('internshipPlacements'));
                }else{
                   
                    return view('admin.pkl.penempatan.index', compact('internshipPlacements'));
                }
        // return view('admin.pkl.penempatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pkl.penempatan.create');
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
        return view('admin.pkl.penempatan.edit', compact(
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
