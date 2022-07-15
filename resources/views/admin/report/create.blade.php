@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Tambah Laporan</h4>
                    </div>
                    <div class="card-body">  
                        <form id="createLaporan" enctype="multipart/form-data">
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
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Laporan</label>
                                    <input class="form-control" type="file" id="file" name="file">
                                  </div>                                    
                                <div class="form-group">
                                    <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                                </div>
                        </form>                      
                    </div>
                </div>
            </div>
            @include('admin.report.scriptcreatedata')
            
        @endsection
