@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">               
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Logbook</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Guru Pembimbing</th>
                                    <th>Tanggal</th>                                                                       
                                    <th>Waktu Mulai</th>                                                                                                       
                                    <th>Waktu Berakhir</th>                                                                                                       
                                    <th>Kegiatan</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody class="logbook" id="logbook">                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.logbook.scriptgetdata')
@endsection
