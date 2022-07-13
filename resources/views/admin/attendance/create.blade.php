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
                        <form action="createAttendance">
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
                                <label>Nama Guru</label>
                                <select name="teacher_id" id="teacher_id" class="form-control teacher_id">
                                    <option value="" disabled="true">Pilih Guru</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" hidden>
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div> 
                            <div class="form-group" hidden>
                                <label>Waktu</label>
                                <input type="time" class="form-control" name="time_in" id="time_in">
                            </div> 
                            <div class="form-group">
                                <button class="form-control" style="background-color:teal; color:white" name="submit" id="submit" type="submit">PRESENSI</button>                        
                            </div>
                        </form>                  
                    </div>
                </div>
            </div>
            @include('admin.attendance.scriptcreatedata')
        @endsection
