@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Edit Logbook siswa</h4>
                    </div>
                    <div class="card-body">    
                        <form id="editLb">
                            @csrf
                            @method('PUT')   
                            <input type="text" id="id" hidden value="{{$logbook->id}}">                                                            
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="activity" id="activity" value="{{$logbook->activity}}">
                            </div> 
                            <div class="mb-3">
                                <label for="formFile" class="form-label">File</label>
                                <input class="form-control" type="file" id="file" name="file" >
                              </div>                                
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('siswa.logbook.scripteditdata')
            
        @endsection
