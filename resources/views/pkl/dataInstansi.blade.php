@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('pkl/createDatainstansi') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Instansi</button>
                </a>
                <div class="card">
                    <div class="card-header">
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
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>ADM Pembangunan</td>
                                       <td>Jl Kabupaten No 13</td>
                                       <td>Pamekasan</td>
                                       <td>Pamekasan</td>
                                       <td>Zainal Raziqin</td>
                                       <td>087734892019</td>
                                       <td>4</td>            
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
