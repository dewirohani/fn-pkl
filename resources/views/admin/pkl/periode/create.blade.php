@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Tambah Periode</h4>
                    </div>
                    <div class="card-body">                   
                            <div class="form-group ">
                                <label>Nama Periode</label>
                                <input type="text" class="form-control" name="nama_periode" id="nama_periode" placeholder="Nama Periode">
                            </div>                                                    
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" placeholder="Tanggal Mulai">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir</label>
                                <input type="date" class="form-control" name="tanggal_berakhir" id="tanggal_berakhir" placeholder="Tanggal Berakhir">
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="status">
                                    <option value="0" disabled="true" selected="true">Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>                                
                                  </select>
                            </div>                             
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                                
                            </div>
                    </div>
                </div>
            </div>
            @include('admin.pkl.periode.scriptcreatedata')
        @endsection
