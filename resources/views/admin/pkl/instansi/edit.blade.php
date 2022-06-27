@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Instansi</h4>
                    </div>
                    <div class="card-body">                        
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" >
                            </div>                                                    
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" >
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" >
                            </div> 
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota_instansi" id="kota_instansi" >
                            </div> 
                            <div class="form-group">
                                <label>Pembimbing Du/Di</label>
                                <input type="text" class="form-control" name="pembimbing_du_di" id="pembimbing_du_di" >
                            </div> 
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="kontak" id="kontak" >
                            </div> 
                            <div class="form-group">
                                <label>Kuota</label>
                                <input type="number" class="form-control" name="kuota" id="kuota" >
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
            @include('admin.pkl.instansi.scripteditdata')
            @include('admin.script.scriptgetguru')
        @endsection
