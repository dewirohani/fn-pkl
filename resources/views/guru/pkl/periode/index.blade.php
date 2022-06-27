@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">              
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Periode</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama Periode</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>                                    
                                    <th>Status</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody class="periode" id="periode">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.pkl.periode.scriptgetdata')
@endsection
