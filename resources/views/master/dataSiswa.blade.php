@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('master/createDatasiswa') }}">
                <button class="btn btn-dark" style="width: 150px; height:50px; float:inherit;">Tambah Siswa</button>
                </a>
                <div class="card">
                    <div class="card-header">
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
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>2103191217</td>
                                       <td>Dewi Rohani</td>
                                       <td>XI RPL 1</td>
                                       <td>Rekayasa Perangkat Lunak</td>
                                       <td>Kolor</td>
                                       <td>Sumenep</td>
                                       <td>11-06-2000</td>
                                       <td>Perempuan</td>
                                       <td>Islam</td>
                                       <td>087743331758</td>
                                       <td>2020</td>
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
