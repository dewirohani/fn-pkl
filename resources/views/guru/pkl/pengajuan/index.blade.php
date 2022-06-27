@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Pengajuan PKL</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>                                    
                                    <th>Periode</th>
                                    <th>Du/Di</th>                                                                                         
                                    <th>Status</th>                                                                                         
                                    <th>Action</th>
                                </thead>
                                <tbody class="pengajuan" id="pengajuan">                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.pkl.pengajuan.scriptgetdata') 
@endsection
