<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class InternshipPlaceController extends Controller
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
            ])->get('http://192.168.43.202:8000/api'.'/places')->json();
            // dd($data);
            $internship_places = json_decode(json_encode($data))->internship_places;
        if($request->ajax()){
            return DataTables::of($internship_places)                           
                            ->addColumn('name', function($row){
                                return $row->name;
                            })                         
                            ->addColumn('address', function($row){
                                return $row->address;
                            })
                            ->addColumn('districts', function($row){
                                return $row->districts;
                            })
                            ->addColumn('city', function($row){
                                return $row->city;
                            })
                            ->addColumn('mentor', function($row){
                                return $row->mentor;
                            })
                            ->addColumn('teacher_id', function($row){
                                return $row->teacher->name;
                            })
                            ->addColumn('phone', function($row){
                                return $row->phone;
                            })                           
                            ->addColumn('quota', function($row){
                                return $row->quota;
                            })                           
                            ->addColumn('time_in', function($row){
                                return $row->time_in;
                            })                           
                            ->addColumn('time_out', function($row){
                                return $row->time_out;
                            })                           
                            ->addColumn('action', function($row){

                                $btn = '<a href="'.route('internship-places.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            if ($auth->level_id == 1) {
                return view('admin.pkl.instansi.index', compact('internship_places'));
            } else if ($auth->level_id == 2){
                return view('guru.pkl.instansi.index', compact('internship_places'));
            } else if ($auth->level_id == 3){
                return view('siswa.pkl.instansi.index', compact('internship_places'));
            }
            
        
    }


    public function create(Request $request)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/teachers')->json();
            $teachers = json_decode(json_encode($data))->teachers;
        return view('admin.pkl.instansi.create', compact('teachers'));
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
      //
    }

    public function edit(Request $request, $id)
    {
        $data = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/places/'.$id.'/edit')->json();
            // dd($data);
            $place = json_decode(json_encode($data))->place;
            // dd($place);
        $dataTeachers = Http::withHeaders([
            'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
            'ContentType' => 'application/json',
            'Accept' => 'application/json',
            ])->get('http://192.168.43.202:8000/api/teachers')->json();
            // dd($dataTeachers);
            $teachers = json_decode(json_encode($dataTeachers))->teachers;
        
        return view('admin.pkl.instansi.edit', compact(
            'place','teachers'
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
