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
                        <form id="createSertifikat" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <select name="student_id" id="student_id" class="form-control student_id">
                                    <option value="" disabled="true">Pilih Siswa</option>
                                    @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label>Guru Pembimbing</label>
                                 <select name="teacher_id" id="teacher_id" class="form-control teacher_id">
                                    <option value="" disabled="true">Pilih Siswa</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Sertifikat</label>
                                <input class="form-control" type="file" id="file" name="file">
                              </div>                                               
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
    @include('admin.sertifikat.scriptcreatedata')
    {{-- @include('admin.script.scriptgetguru') --}}
        @endsection
