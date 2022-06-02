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
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>                                                    
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <input type="date" class="form-control" name="guru_pembimbing" placeholder="Guru Pembimbing">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                            </div> 
                            <div class="form-group">
                                <label>Waktu Mulai</label>
                                <input type="time" class="form-control" name="waktu_mulai" placeholder="Waktu Mulai">
                            </div> 
                            <div class="form-group">
                                <label>Waktu Berakhir</label>
                                <input type="time" class="form-control" name="waktu_berakhir" placeholder="Waktu Berakhir">
                            </div>                     
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan">
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
