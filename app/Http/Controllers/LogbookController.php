<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class LogbookController extends Controller
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
            ])->get('http://localhost/pa/backend/public/api'.'/logbooks')->json();
            // dd($data);
            $logbooks = json_decode(json_encode($data))->logbooks;
        if($request->ajax()){
            return DataTables::of($logbooks)
                            ->addColumn('attendance_id', function($row){
                                return $row->attendance_id;
                            })
                            ->addColumn('student', function($row){
                                return $row->student->name;
                            })
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })
                            ->addColumn('date_of_logbook', function($row){
                                return $row->date_of_logbook;
                            })
                            ->addColumn('activity', function($row){
                                return $row->activity;
                            })
                            ->addColumn('status_id', function($row){
                                return $row->logbookStatuses->name;
                            })
                            ->addColumn('file', function($row){
                                return $row->file;
                            })
                            ->addColumn('action', function($row){

                                $btn = '<a href="javascript:void(0)" data-toggle="tooltip" onclick="updateItem(this)" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm"><span><i class="fas fa-eye"></i></span></a>';

                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.logbook.index', compact('logbooks'));
        // return view('admin.logbook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logbook.create');
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
        return view('admin.logbook.edit', compact(
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
