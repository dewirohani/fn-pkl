@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title "> Tambah Periode</h4>
                    </div>
                    <div class="card-body">   
                        <form id="createPeriode">           
                            <div class="form-group ">
                                <label>Nama Periode</label>
                                <input type="text" class="form-control" name="nama_periode" id="nama_periode" placeholder="Nama Periode">
                            </div>                                                    
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Tanggal Mulai">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berakhir</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Tanggal Berakhir">
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_id" id="status_id" class="form-control status_id">
                                    <option value="" disabled="true">Pilih Status</option>
                                    @foreach ($periodStatuses as $period)
                                    <option value="{{ $period->id }}">{{ $period->name }}</option>
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
            @include('admin.pkl.periode.scriptcreatedata')
        @endsection
