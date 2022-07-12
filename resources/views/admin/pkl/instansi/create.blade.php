@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Instansi</h4>
                    </div>
                    <div class="card-body">   
                        <form id="createInstansi">
                            @csrf                    
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="ex: Jhon">
                            </div>                                                    
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="ex: Jl.xxx">
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="districts" id="districts" placeholder="ex: Pamekasan">
                            </div> 
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="ex: Pamekasan">
                            </div> 
                            <div class="form-group">
                                <label>Pembimbing Du/Di</label>
                                <input type="text" class="form-control" name="mentor" id="mentor" placeholder="ex: Jhon">
                            </div> 
                            <div class="form-group">
                                <label>Guru</label>
                                <select name="teacher_id" id="teacher_id" class="form-control teacher_id">
                                    <option value="" disabled="true">Pilih Guru</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="ex: 08xxxxxxxxxx">
                            </div> 
                            <div class="form-group">
                                <label>Kuota</label>
                                <input type="number" class="form-control" name="quota" id="quota" placeholder="ex: 1">
                            </div>                            
                            <div class="form-group">
                                <label>Waktu Datang</label>
                                <input type="time" class="form-control" name="time_in" id="time_in" placeholder="ex: 07:00:00">
                            </div>                            
                            <div class="form-group">
                                <label>Waktu Pulang</label>
                                <input type="time" class="form-control" name="time_out" id="time_out" placeholder="ex: 13:00:00">
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>                                
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            @include('admin.pkl.instansi.scriptcreatedata')
            
        @endsection
