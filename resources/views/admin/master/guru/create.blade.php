@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Guru</h4>
                    </div>
                    <div class="card-body">  
                        <form id="createGuru">
                            @csrf                  
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="ex: JhonDoe">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="ex: jhon@xxx">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="ex: xxxxx">
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="nip" id="nip" placeholder="ex: 12xxx">
                            </div>
                            <div class="form-group">
                                <label>Nama Guru</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="ex: Jhon">
                            </div>                           
                            {{-- <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="ex: Jl.xxx">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="ex: Pamekasan">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" id="gender">
                                    <option value="0" disabled="true" selected="true">Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>                                    
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" id="religion">
                                    <option value="0" disabled="true" selected="true">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lain-Lain">Lain-Lain</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="ex: 08xxxxxxxxxx">
                            </div> --}}
                            {{-- <div class="form-group">
                                <label> User</label>
                                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="ex: 1">
                            </div> --}}
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            </form> 
            @include('admin.master.guru.scriptcreatedata')
            
        @endsection
