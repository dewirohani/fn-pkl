@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Jurusan</h4>
                    </div>
                    <div class="card-body">   
                        <form id="editJurusan">
                            @csrf
                            @method('PUT')   
                            <input type="text" id="id" hidden value="{{$major->id}}">            
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control" name="code" id="code" value="{{$major->code}}" >
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$major->name}}" >
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="description" id="description" value="{{$major->description}}" >
                            </div>                            
                            <div class="form-group">
                                <button class="btn btn-info" type="submit" id="submit" >Simpan</button>                                
                            </div> 
                        </form>                       
                    </div>
                </div>
            </div>
            @include('admin.master.jurusan.scripteditdata')
        @endsection
