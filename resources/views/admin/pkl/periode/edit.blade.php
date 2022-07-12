@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Edit Periode</h4>
                    </div>
                    <div class="card-body">    
                        <form id="editPeriode">
                            @csrf
                            @method('PUT')                  
                            <div class="form-group ">
                                <input type="text" id="id" hidden value="{{$period->id}}">  
                                <label>Nama Periode</label>
                                <input type="text" class="form-control" name="nama_periode" id="nama_periode" value="{{$period->nama_periode}}" >
                            </div>                                                    
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" value="{{$period->start_date}}" >
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" value="{{$period->end_date}}" >
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_id" id="status_id" class="form-control status_id">
                                    <option value="" disabled="true">Pilih Status</option>
                                    @foreach ($periodStatuses as $status)
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
            @include('admin.pkl.periode.scripteditdata')
        @endsection
