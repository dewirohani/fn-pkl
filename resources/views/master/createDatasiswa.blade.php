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
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="NIS">
                            </div>
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" placeholder="Kelas">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                 <select class="form-control" id="jurusan">
                                    <option>--Jurusan--</option>
                                    <option>Rekayasa Perangkat Lunak</option>
                                    <option>Multimedia</option>
                                    <option>Tata Busana</option>
                                    <option>Tata Boga</option>
                                    <option>Tata Kecantikan Kulit & Rambut</option>
                                    <option>Akomodasi Perhotelan</option>
                                    <option>Desain Fashion</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat_siswa" placeholder="Alamat">
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
                                <label>Tahun Masuk</label>
                                <select class="form-control" id="tahun_masuk">
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
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
