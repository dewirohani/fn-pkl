@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>                                                    
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" placeholder="Kelas">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" id="jurusan">
                                    <option>--jurusan--</option>
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
                                <label>Periode</label>
                                <input type="text" class="form-control" name="periode" placeholder="Periode">
                            </div>
                            <div class="form-group">
                                <label>Du/Di</label>
                                <input type="text" class="form-control" name="du_di" placeholder="Du/Di">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="status">
                                    <option>--Status--</option>
                                    <option>Menunggu</option>
                                    <option>Diterima</option>                                
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
