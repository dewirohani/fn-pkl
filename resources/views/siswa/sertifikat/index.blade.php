@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Sertifikat</h6>                       
                      </div>
                    <div class="card-body">
                        
                       <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th> 
                                <th>Download</th> 
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($internship_certificate as $certificate)
                            <tr>
                                <td>{{$certificate->student->name}}</td> 
                                {{-- <td>{{$certificate->file}}</td>   --}}
                                <td><a href="http://192.168.43.202:8000/{{$certificate->file}}" data-toggle="tooltip" data-original-title="View" class="edit btn btn-dark btn-sm"><span><i class="fas fa-download"></i></span></a></td>                                                
                            </tr>
                            @endforeach
                        </tbody>
                        </table>                         
                    </div>
                </div>
            </div>
            @include('siswa.pkl.pengajuan.scriptcreatedata')
          
        @endsection
