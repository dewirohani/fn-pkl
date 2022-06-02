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
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Nama Periode</label>
                                <input type="text" class="form-control" name="nama_periode" placeholder="Nama Periode">
                            </div>                                                    
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tanggal_mulai" placeholder="Tanggal Mulai">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir</label>
                                <input type="date" class="form-control" name="tanggal_berakhir" placeholder="Tanggal Berakhir">
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="status">
                                    <option>Aktif</option>
                                    <option>Tidak Aktif</option>                                   
                                  </select>
                            </div>                             
                            <div class="form-group">
                                <button class="btn btn-info">Simpan</button>
                                <button class="btn btn" style="background-color: grey">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
