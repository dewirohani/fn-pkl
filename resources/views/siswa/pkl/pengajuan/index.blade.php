@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Pengajuan</h6>
                        {{-- <a href="{{ route('internship-submissions-siswa.create') }}">
                          <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a> --}}
                      </div>
                    <div class="card-body">
                        
                       <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Periode</th> 
                                <th>Du/Di</th> 
                                <th>File</th> 
                                <th>Status</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$internshipSubmission->period->nama_periode}}</td> 
                                <td>{{$internshipSubmission->internship_place->name}}</td> 
                                <td>{{$internshipSubmission->file}}</td> 
                                <td>{{$internshipSubmission->internship_submission_status->name}}</td> 
                            </tr>
                        </tbody>
                        </table>                         
                    </div>
                </div>
            </div>
            @include('siswa.pkl.pengajuan.scriptcreatedata')
          
        @endsection
