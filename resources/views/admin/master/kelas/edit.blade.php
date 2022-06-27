@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Kelas</h4>
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas">
                            </div>                        
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control jurusan">
                                    <option value="0" disabled="true" selected="true">Jurusan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Total Siswa</label>
                                <input type="text" class="form-control" name="total_siswa" id="total_siswa">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                            </div> 
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.master.kelas.scripteditdata')
@include('admin.script.scriptgetjurusan')
@endsection
