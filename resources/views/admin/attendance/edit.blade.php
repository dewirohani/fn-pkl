@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Edit Logbook</h4>
                    </div>
                    <div class="card-body">    
                        <form id="editLogbook">
                            @csrf
                            @method('PUT')   
                            <input type="text" id="id" hidden value="{{$logbook->id}}">                                                            
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" class="form-control" name="activity" id="activity" value="{{$logbook->activity}}">
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_id" id="status_id" class="form-control status_id">
                                    <option value="" disabled="true">Pilih Status</option>
                                    @foreach ($logbookStatuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>                                           
                            <div class="form-group">
                                <button class="btn btn-info" id="submit" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('admin.logbook.scripteditdata')
            
        @endsection
