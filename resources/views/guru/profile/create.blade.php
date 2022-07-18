@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form id="createProfil">
                            @csrf                                                                                               
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="address" id="address">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input class="form-control" type="text" name="gender" id="gender">
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <input class="form-control" type="text" name="religion" id="religion">
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input class="form-control" type="text" name="phone" id="phone">
                            </div>                                                                
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>                                
                            </div>
                        </form>                         
                    </div>
                </div>
            </div>
            @include('siswa.profil.scriptcreatedata')
          
        @endsection
