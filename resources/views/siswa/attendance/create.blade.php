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
                            <div class="form-group ">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" disabled name="nama_siswa" id="nama_siswa" placeholder="ex: Jhon">
                            </div>                                                    
                            {{-- <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div> --}}
                            <div class="form-group" hidden>
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="waktu" id="waktu">
                            </div> 
                            <div class="form-group">
                                <button class="form-control" style="background-color:teal; color:white" name="presensi" id="presensi">PRESENSI</button>                        
                            </div>
                            {{-- <div class="form-group">
                                <label>Foto</label>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <br>
                                    Select image to upload:
                                    <input type="file" name="fileToUpload" id="foto">
                                    <input type="submit" value="Upload Image" name="submit">
                                  </form>
                            </div> 
                            <div class="form-group">
                                <label>Signature</label>
                                <form action="#" method="post" enctype="multipart/form-data">                                
                                    Select signature to upload:
                                    <input type="file" name="fileToUpload" id="signature">
                                    <input type="submit" value="Upload Image" name="submit">
                                  </form>
                            </div>  --}}
                                                
                            {{-- <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                        
                            </div> --}}
                    </div>
                </div>
            </div>
            @include('siswa.attendance.scriptcreatedata')
        @endsection
