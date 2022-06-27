@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('internship-placements.create') }}">
                            <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a>
                        <h4 class="card-title"> Data Penempatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Id Pengajuan</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Periode</th>
                                    <th>Du/Di</th>
                                    <th>Guru Pembimbing</th>                                    
                                    <th>Kelas</th>                                                                                                       
                                    <th>Jurusan</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody class="penempatan" id="penempatan"> 
                                    @foreach ($internship_placements as $row)
                                    <tr> 
                                        <td>{{$i++}}</td>
                                        <td>{{$row->internship_submission_id}}</td>
                                        <td>{{$row->student_id}}</td>
                                        <td>{{$row->period_id}}</td>
                                        <td>{{$row->internship_place_id}}</td>
                                        <td>{{$row->teacher_id}}</td>
                                        <td>{{$row->grade_id}}</td>
                                        <td>{{$row->major_id}}</td>                                                                
                                        <td> 
                                            <a href="internship-placements/{{$row->id}}/edit" id="sbmbtn" class="btn btn-warning btn-link edit">
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
@include('admin.pkl.penempatan.scriptdeletedata')
@endsection
