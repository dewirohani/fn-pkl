@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('master/createDatajurusan') }}">
                <button class="btn btn-dark" style="width: 180px; height:50px; float:inherit">Tambah Jurusan</button>
                </a>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-dark">
                                    <th>#</th>                            
                                    <th>Jurusan</th>                                    
                                    <th>Keterangan</th>                                                                             
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                       <td>1</td>
                                       <td>Rekayasa Perangkat Lunak</td>
                                       <td>-</td>               
                                       <td>
                                        <button class="btn btn-warning btn-link" ><ion-icon name="create"></ion-icon></button>
                                        <button class="btn btn-danger btn-link"><ion-icon name="trash"></ion-icon></button>
                                       </td>
                                    </tr>  
                                    <tr>                                        
                                        <td>2</td>
                                        <td>Multimedia</td>
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
