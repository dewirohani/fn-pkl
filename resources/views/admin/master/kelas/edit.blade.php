@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Kelas</h4>
                    </div>
                    <div class="card-body">
                        <form id="editKelas">
                            @csrf
                            @method('PUT')   
                            <input type="text" id="id" hidden value="{{$grade->id}}">            
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$grade->name}}">
                            </div>                                              
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="major_id" id="major_id" class="form-control major_id">
                                    <option value="" disabled="true">Pilih Jurusan</option>
                                    @foreach ($majors as $major)
                                    <option value="{{ $major->id }}">{{ $major->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="description" id="description" value="{{$grade->description}}">
                            </div> 
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>                                
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.master.kelas.scripteditdata')
@endsection
