@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">            
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Kelas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>                                    
                                    <th>Total Siswa</th>
                                    <th>Keterangan</th>                                                                             
                                    <th>Action</th>
                                </thead>
                                <tbody class="kelas" id="kelas">                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.master.kelas.scriptgetdata')
@endsection
