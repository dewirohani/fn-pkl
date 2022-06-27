@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Tambah Logbook</h4>
                    </div>
                    <div class="card-body">                        
                            <div class="form-group ">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="ex:Jhon">
                            </div>                                                    
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <select name="guru" id="guru" class="form-control guru">
                                    <option value="0" disabled="true" selected="true"> Pilih Guru Pembimbing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div> 
                            <div class="form-group">
                                <label>Waktu Mulai</label>
                                <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai" >
                            </div> 
                            <div class="form-group">
                                <label>Waktu Berakhir</label>
                                <input type="time" class="form-control" name="waktu_berakhir" id="waktu_berakhir">
                            </div>                     
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="ex: Melakukan Kegiatan">
                            </div>                                      
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>
                            </div>
                    </div>
                </div>
            </div>
            @include('siswa.logbook.scriptcreatedata')
            @include('siswa.script.scriptgetguru')
        @endsection
