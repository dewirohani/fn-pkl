@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>No Telp</th>
                                    <th>Tahun Masuk</th>                                   
                                    <th>User</th>                                   
                                    <th>Action</th>
                                </thead>
                                <tbody class="siswa" id="siswa">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.master.siswa.scriptgetdata')
@endsection
