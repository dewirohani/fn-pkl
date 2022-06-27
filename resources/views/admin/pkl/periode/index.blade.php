@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('periods.create') }}">
                            <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a>
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
                                    @foreach ($periods as $row)
                                    <tr> 
                                        <td>{{$i++}}</td>
                                        <td>{{$row->nama_periode}}</td>
                                        <td>{{$row->start_date}}</td>
                                        <td>{{$row->end_date}}</td>
                                        <td><button class="btn btn-info btn-round">{{$row->status}}</button></td></td>
                                                                      
                                        <td> 
                                            <a href="periods/{{$row->id}}/edit" id="sbmbtn" class="btn btn-warning btn-link edit">
                                                <ion-icon name="create"></ion-icon> 
                                                </a>
                                                <button onclick="deleteData(this)" data-id="{{ $row->id }}" class="btn btn-danger btn-link delete"><ion-icon name="trash"></ion-icon></button>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('admin.pkl.periode.scriptdeletedata')
@endsection
