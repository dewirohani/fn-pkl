@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('internship-places.create') }}">
                            <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a>
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
                                    @foreach ($places as $row)
                                    <tr> 
                                        <td>{{$i++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->address}}</td>
                                        <td>{{$row->districts}}</td>
                                        <td>{{$row->city}}</td>
                                        <td>{{$row->mentor}}</td>
                                        <td>{{$row->phone}}</td>
                                        <td>{{$row->quota}}</td>
                                        <td>{{$row->teacher_id}}</td>                                
                                        <td> 
                                            <a href="internship-places/{{$row->id}}/edit" id="sbmbtn" class="btn btn-warning btn-link edit">
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
@include('guru.pkl.instansi.scriptdeletedata')
@endsection
