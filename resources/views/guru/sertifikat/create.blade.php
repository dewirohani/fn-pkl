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
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="ex: Jhon">
                            </div>
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <select name="guru" id="guru" class="form-control guru">
                                    <option value="0" disabled="true" selected="true"> Pilih Guru Pembimbing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sertifikat</label>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <br>
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="sertifikat">
                                    <input type="submit" value="Upload Image" name="submit">
                                  </form>
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    @include('guru.sertifikat.scriptcreatedata')
    @include('guru.script.scriptgetguru')
        @endsection
