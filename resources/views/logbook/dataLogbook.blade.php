@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('logbook/createDatalogbook') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Logbook</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Logbook</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Guru Pembimbing</th>
                                    <th>Tanggal</th>                                                                       
                                    <th>Waktu Mulai</th>                                                                                                       
                                    <th>Waktu Berakhir</th>                                                                                                       
                                    <th>Kegiatan</th>                                                                                                       
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>Dewi Rohani</td>
                                       <td>Dedy Irawan</td>
                                       <td>1-06-2022</td>
                                       <td>07:00</td>                                       
                                       <td>14:00</td>                                       
                                       <td>Entry Data</td>                                                           
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
