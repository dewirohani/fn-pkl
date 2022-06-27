@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Instansi</h4>
                    </div>
                    <div class="card-body">                        
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="ex: Jhon">
                            </div>                                                    
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" placeholder="ex: Jl.xxx">
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="ex: Pamekasan">
                            </div> 
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota_instansi" id="kota_instansi" placeholder="ex: Pamekasan">
                            </div> 
                            <div class="form-group">
                                <label>Pembimbing Du/Di</label>
                                <input type="text" class="form-control" name="pembimbing_du_di" id="pembimbing_du_di" placeholder="ex: Jhon">
                            </div> 
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="kontak" id="kontak" placeholder="ex: 08xxxxxxxxxx">
                            </div> 
                            <div class="form-group">
                                <label>Kuota</label>
                                <input type="number" class="form-control" name="kuota" id="kuota" placeholder="ex: 1">
                            </div> 
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <select name="guru" id="guru" class="form-control guru">
                                    <option value="0" disabled="true" selected="true"> Pilih Guru Pembimbing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                                
                            </div>
                    </div>
                </div>
            </div>
            @include('admin.pkl.instansi.scriptcreatedata')
            @include('admin.script.scriptgetguru')
        @endsection
