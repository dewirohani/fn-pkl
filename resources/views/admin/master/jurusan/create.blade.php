@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <form id="createJurusan">
                            @csrf
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control" name="code" id="code" placeholder="ex: RPL">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="ex: Rekayasa Perangkat Lunak">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="ex: Deskripsi">
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('admin.master.jurusan.scriptcreatedata')
        @endsection
