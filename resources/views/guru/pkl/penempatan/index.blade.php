@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('guru/pkl/createDatapenempatan') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Penempatan</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Penempatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Id Pengajuan</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Periode</th>
                                    <th>Du/Di</th>
                                    <th>Guru Pembimbing</th>                                    
                                    <th>Kelas</th>                                                                                                       
                                    <th>Jurusan</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody class="penempatan" id="penempatan">                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.pkl.penempatan.scriptgetdata')
@endsection
