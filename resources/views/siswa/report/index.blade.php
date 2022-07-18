@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Logbook</h6>
                        <a href="{{ route('reports-siswa.create') }}">
                          <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus">Tambah Laporan</i></button>
                        </a>
                      </div>
                    <div class="card-body">
                        
                       <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th> 
                                <th>Nama Guru</th> 
                                <th>Laporan</th> 
                                <th>Status</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($internshipReports as $report)
                            <tr>
                                <td>{{$report->student->name}}</td> 
                                <td>{{$report->teacher->name}}</td> 
                                <td>{{$report->file}}</td> 
                                <td>{{$report->status->name}}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                        </table>                         
                    </div>
                </div>
            </div>
            @include('siswa.report.scriptcreatedata')
          
        @endsection
