@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('master/createDatakelas') }}">
                <button class="btn btn-dark" style="width: 150px; height:50px; float:inherit">Tambah Kelas</button>
                </a>
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
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>XI RPL 1</td>
                                       <td>Rekayasa Perangkat Lunak</td>
                                       <td>31</td>
                                       <td>-</td>               
                                       <td>
                                           <button class="btn btn-warning btn-link" ><ion-icon name="create"></ion-icon></button>
                                           <button class="btn btn-danger btn-link"><ion-icon name="trash"></ion-icon></button>
                                       </td>
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  
@endsection
