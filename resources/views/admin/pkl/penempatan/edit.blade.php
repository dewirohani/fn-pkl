@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Penempatan</h4>
                    </div>
                    <div class="card-body">                                                        
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" disabled name="nama_siswa" id="nama_siswa" >
                            </div>                                                    
                            <div class="form-group">
                                <label>Kelas</label>
                                {{-- <select name="kelas" id="kelas" disabled class="form-control kelas">
                                    <option value="0" disabled="true" selected="true">Pilih Kelas</option>
                                </select> --}}
                                <input type="text" class="form-control" disabled name="kelas" id="kelas" >
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                {{-- <select name="jurusan" id="jurusan" disabled class="form-control jurusan">
                                    <option value="0" disabled="true" selected="true">Pilih Jurusan</option>
                                </select> --}}
                                <input type="text" class="form-control" disabled name="jurusan" id="jurusan" >
                            </div>                                             
                            <div class="form-group">
                                <label>Periode</label>
                                <input type="text" class="form-control" disabled name="periode" id="periode" >
                            </div>                                                  
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <select name="guru" id="guru" class="form-control guru">
                                    <option value="0" disabled="true" selected="true"> Pilih Guru Pembimbing</option>
                                </select>
                                {{-- <input type="text" class="form-control"  name="guru" id="guru" > --}}
                            </div>
                            <div class="form-group">
                                <label>Du/Di</label>
                                <input type="text" class="form-control" disabled  name="du_di" id="du_di" >
                                {{-- <select name="du_di" id="du_di" dissable class="form-control du_di">
                                    <option value="0" disabled="true" selected="true">Pilih Du/Di</option>
                                </select> --}}
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>                                
                            </div>                    
                    </div>
                </div>
            </div>
            @include('admin.pkl.penempatan.scripteditdata')
            {{-- @include('admin.script.scriptgetjurusan')
            @include('admin.script.scriptgetkelas')
            @include('admin.script.scriptgetperiode')            
            @include('admin.script.scriptgetinstansi')             --}}
            @include('admin.script.scriptgetguru')            
            
        @endsection
