@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('master/createDataguru') }}">
                <button class="btn btn-dark" style="width: 150px; height:50px; float:inherit">Tambah Guru</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Guru</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>NIP</th>
                                    <th>Nama</th>                                    
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>No Telp</th>                                                 
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>123456789</td>
                                       <td>Dedy Irawan</td>
                                       <td>Betet</td>
                                       <td>Pamekasan</td>
                                       <td>12-09-1980</td>
                                       <td>Laki-Laki</td>
                                       <td>Islam</td>
                                       <td>0877908654321</td>
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
