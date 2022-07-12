@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">           
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('students.create') }}">
                            <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a>
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
                                    @foreach ($students as $row)                                        
                                    <tr> 
                                        <td>{{$i++}}</td>
                                        <td>{{{$row->nis}}}</td>
                                        <td>{{{$row->name}}}</td>
                                        <td>{{{$row->grade_id}}}</td>
                                        <td>{{{$row->major_id}}}</td>
                                        <td>{{{$row->address}}}</td>
                                        <td>{{{$row->place_of_birth}}}</td>
                                        <td>{{{$row->date_of_birth}}}</td>
                                        <td>{{{$row->gender}}}</td>
                                        <td>{{{$row->religion}}}</td>
                                        <td>{{{$row->phone}}}</td>
                                        <td>{{{$row->year_of_entry}}}</td>
                                        <td>{{{$row->user_id}}}</td>
                                        <td> 
                                            <a href="students/{{$row->id}}/edit" id="sbmbtn" class="btn btn-warning btn-link edit">
                                                <ion-icon name="create"></ion-icon> 
                                            </a>
                                            <button onclick="deleteData(this)" data-id="{{$row->id}}" class="btn btn-danger btn-link delete"><ion-icon name="trash"></ion-icon></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@include('guru.master.siswa.scriptdeletedata')
@endsection
