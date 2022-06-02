@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Sertifikat</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                            </div>
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <input type="text" class="form-control" name="guru_pembimbing" placeholder="Guru Pembimbing ">
                            </div>
                            <div class="form-group">
                                <label>Sertifikat</label>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <br>
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <input type="submit" value="Upload Image" name="submit">
                                  </form>
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
