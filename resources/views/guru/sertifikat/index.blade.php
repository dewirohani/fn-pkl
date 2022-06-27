@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('guru/sertifikat/createDatasertifikat') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Sertifikat</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Sertifikat</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>                            
                                    <th>Nama Siswa</th>                                    
                                    <th>Guru Pembimbing</th>                                                                             
                                    <th>Sertifikat</th>                                                                             
                                    <th>Action</th>
                                </thead>
                                <tbody class="sertifikat" id="sertifikat">                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  @include('guru.sertifikat.scriptgetdata')
@endsection
