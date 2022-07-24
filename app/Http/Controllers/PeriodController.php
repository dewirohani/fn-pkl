<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Http;

class PeriodController extends Controller
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
            ])->get('http://192.168.43.215:8000/api'.'/periods')->json();
            $periods = json_decode(json_encode($data))->periods;
            // dd($data);
        if($request->ajax()){
            return DataTables::of($periods)
                            ->addColumn('nama_periode', function($row){
                                return $row->nama_periode;
                            })
                            ->addColumn('start_date', function($row){
                                return $row->start_date;
                            })
                            ->addColumn('end_date', function($row){
                                return $row->end_date;
                            })
                            ->addColumn('status_id', function($row){
                                return $row->period_statuses->name;
                            })
                            ->addColumn('action', function($row){

                                $btn = '<a href="'.route('periods.edit', $row->id).'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-warning btn-sm"><span><i class="fas fa-pen-square"></i></span></a>';
                                $btn .='&nbsp';
                                $btn .= '<a href="javascript:void(0)" data-toggle="tooltip" onclick="deleteItem(this)" data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm"><span><i class="fas fa-trash"></i></a>';

                                 return $btn;
                            })
                            ->rawColumns(['action'])
                            ->addIndexColumn()
                            ->make(true);
            }
            return view('admin.pkl.periode.index', compact('periods'));
        // return view('admin.pkl.periode.index');
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
            ])->get('http://192.168.43.215:8000/api/period-statuses')->json();
            // dd($data);   
            $periodStatuses = json_decode(json_encode($data))->periodStatuses;
        return view('admin.pkl.periode.create', compact('periodStatuses'));
        
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
    public function show( Request $request, $id)
    {
        // $data = Http::withHeaders([
        //     'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
        //     'ContentType' => 'application/json',
        //     'Accept' => 'application/json',
        //     ])->get('http://192.168.43.215:8000/api/period-statuses')->json();
        //     // dd($data);   
        //     $periodStatuses = json_decode(json_encode($data))->periodStatuses;
        // return view('admin.pkl.periode.edit', compact('periodStatuses'));
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
            ])->get('http://192.168.43.215:8000/api/periods/'.$id.'/edit')->json();
            $period = json_decode(json_encode($data))->period;
            // dd($period);
            $dataStatuses = Http::withHeaders([
                'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
                'ContentType' => 'application/json',
                'Accept' => 'application/json',
                ])->get('http://192.168.43.215:8000/api/period-statuses')->json();
                // dd($data);
                $periodStatuses = json_decode(json_encode($dataStatuses))->periodStatuses;
        
        return view('admin.pkl.periode.edit', compact(
            'period','periodStatuses'
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
