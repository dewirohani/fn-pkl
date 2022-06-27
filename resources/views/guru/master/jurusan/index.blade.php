@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">              
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="jurusan">
                                <thead class=" text-dark">
                                    <th>#</th>                            
                                    <th>Jurusan</th>                                    
                                    <th>Keterangan</th>                                                                             
                                    <th>Action</th>
                                </thead>
                                <tbody class="jurusan" id="jurusan"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
@include('guru.master.jurusan.scriptgetdata')
@endsection
