@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Tambah Attendance</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>                                                    
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="waktu" placeholder="Waktu">
                            </div> 
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                            </div> 
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="text" class="form-control" name="foto" placeholder="Foto">
                            </div> 
                            <div class="form-group">
                                <label>Signature</label>
                                <input type="text" class="form-control" name="signature" placeholder="Signature">
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
