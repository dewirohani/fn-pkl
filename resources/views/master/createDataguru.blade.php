@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Guru</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="nip" placeholder="NIP">
                            </div>
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru">
                            </div>                           
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" id="jurusan">
                                    <option>--Jenis Kelamin--</option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>                                    
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" id="agama">
                                    <option>--Agama--</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Konghucu</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="no_hp" placeholder="No HP">
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
