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
                        <form id="createAtd">
                            @csrf  
                        <div class="form-group ">
                            <label>Nama Siswa</label>
                            <select name="student_id" id="student_id" class="form-control student_id">
                                <option value="" disabled="true">Pilih Siswa</option>
                                @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>                                                    
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div> 
                         
                            <div class="form-group">
                                <label>Waktu Datang</label>
                                <input type="time" class="form-control" name="time_in" id="time_in">
                            </div>  
                            <div class="form-group">
                                <label>Waktu Pulang</label>
                                <input type="time" class="form-control" name="time_out" id="time_out">
                            </div>  
                            <div class="form-group" >
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="description" id="description">
                            </div>  
                                                             
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                            </div>
                        </form>                      
                    </div>
                </div>
            </div>
            @include('admin.attendance.scriptcreatedata')
            
        @endsection
