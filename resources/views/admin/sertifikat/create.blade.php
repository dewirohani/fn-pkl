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
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="ex: Jhon">
                            </div>
                            <div class="form-group">
                                <label>Guru Pembimbing</label>
                                <select name="guru" id="guru" class="form-control guru">
                                    <option value="0" disabled="true" selected="true"> Pilih Guru Pembimbing</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Sertifikat</label>
                                <input class="form-control" type="file" id="sertifikat">
                              </div>
                              <div class="form-group" hidden>
                                <label>Path</label>
                                <input type="text" class="form-control" name="path" id="path">
                            </div>
                                                       
                            <div class="form-group">
                                <button class="btn btn-info" id="sbmbtn">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                $("#input_file").change(function(){
                //get file name
                var the_file = document.getElemetById("input_gambar");
                var file_name = the_file.files[0];
                $("#span_file").html(file_name);
	
                    });
                });
            </script>
    @include('admin.sertifikat.scriptcreatedata')
    @include('admin.script.scriptgetguru')
        @endsection
