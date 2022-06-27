@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Attendance</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>                                                                       
                                    <th>Lokasi</th>                                                                                                       
                                    <th>Foto</th>                                                                                                       
                                    <th>Signature</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody class="attendance" id="attendance">                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.attendance.scriptgetdata') 
@endsection
