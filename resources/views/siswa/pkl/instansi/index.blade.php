@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Instansi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>                                    
                                    <th>Kota</th>
                                    <th>Pembimbing Du/Di</th>  
                                    <th>Kontak</th>                                                                           
                                    <th>Kuota</th>       
                                    <th>Guru Pembimbing</th>                                                                     
                                    <th>Action</th>
                                </thead>
                                <tbody class="a" id="a">                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('siswa.pkl.instansi.scriptgetdata')
@endsection
