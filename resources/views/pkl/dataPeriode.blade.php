@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('pkl/createDataperiode') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Periode</button>
                </a>
                <div class="card">
                    <div class="card-header">
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
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>Periode 1 Tahun 2022</td>
                                       <td>1-06-2022</td>
                                       <td>1-09-2022</td>                                       
                                       <td><button class="btn btn-info btn-round" >Aktif</button></td>            
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
