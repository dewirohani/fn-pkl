@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Pengajuan</h4>
                    </div>
                    <div class="card-body">
                        <form id="createPengajuan" enctype="multipart/form-data">
                            @csrf                   
                            {{-- <div class="form-group">
                                <label>Nama Siswa</label>
                                <select name="student_id" id="student_id" class="form-control student_id">
                                    <option value="" disabled="true">Pilih Siswa</option>
                                    @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>                                                    --}}
                            <div class="form-group">
                                <label>Periode</label>
                                <select name="period_id" id="period_id" class="form-control period_id">
                                    <option value="" disabled="true">Pilih Periode</option>
                                    @foreach ($periods as $periode)
                                    <option value="{{ $periode->id }}">{{ $periode->nama_periode }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Du/Di</label>
                                <select name="internship_place_id" id="internship_place_id" class="form-control internship_place_id">
                                    <option value="" disabled="true">Pilih Du/Di</option>
                                    @foreach ($internship_places as $place)
                                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Berkas</label>
                                <input class="form-control" type="file" name="file" id="file">
                              </div>                   
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>                                
                            </div>
                        </form>                         
                    </div>
                </div>
            </div>
            @include('siswa.pkl.pengajuan.scriptcreatedata')
          
        @endsection
