@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('grades.create') }}">
                            <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                        </a>
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
                                    @foreach ($grades as $row)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->major_id }}</td>
                                        <td>{{ $row->total_student }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td> <a href="grades/{{$row->id}}/edit" id="sbmbtn" class="btn btn-warning btn-link edit">
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
@include('admin.master.kelas.scriptdeletedata')
@endsection
