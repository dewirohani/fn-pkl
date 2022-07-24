@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Logbook</h6>
                        <a href="{{ route('logbooks-siswa.create') }}">
                          <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus">Tambah Logbook</i></button>
                        </a>
                      </div>
                    <div class="card-body">
                        
                       <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Tanggal</th> 
                                <th>Kegiatan</th> 
                                <th>File</th> 
                                <th>Status</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logbooks as $logbook)
                            <tr>
                                <td>{{$logbook->date}}</td> 
                                <td>{{$logbook->activity}}</td> 
                                <td>{{$logbook->file}}</td> 
                                <td>{{$logbook->logbook_statuses->name}}</td> 
                                <td><a href="/logbooks-siswa/{{ $logbook->id }}/edit"><button class="edit btn btn-warning btn-sm"><i class="fas fa-pen-square"></i></button></a></td> 
                            </tr>
                            @endforeach
                        </tbody>
                        </table>                         
                    </div>
                </div>
            </div>
            @include('siswa.pkl.pengajuan.scriptcreatedata')
          
        @endsection
