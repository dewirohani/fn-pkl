@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Siswa</h4>
                    </div>
                    <div class="card-body">                        
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="ex: 12xxx">
                            </div>
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="ex: John">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" id="kelas" class="form-control kelas">
                                    <option value="0" disabled="true" selected="true">Pilih Kelas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control jurusan">
                                    <option value="0" disabled="true" selected="true"> Pilih Jurusan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat_siswa" id="alamat_siswa" placeholder="ex: Jl.xxx">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="ex: Pamekasan">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin">
                                    <option value="0" disabled="true" selected="true">Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>                                    
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" id="agama">
                                    <option value="0" disabled="true" selected="true">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lain-Lain">Lain-Lain</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="ex: 08xxxxxxxxxx">
                            </div>
                            <div class="form-group">
                                <label>Tahun Masuk</label>
                                <input type="text" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="ex: 2020">
                            </div>
                            <div class="form-group">
                                <label> User</label>
                                <input type="text" class="form-control" name="user" id="user" placeholder="ex: 1">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                               
                            </div>
                    </div>
                </div>
            </div>
            @include('admin.master.siswa.scriptcreatedata')
            @include('admin.script.scriptgetjurusan')
            @include('admin.script.scriptgetkelas')
        @endsection
