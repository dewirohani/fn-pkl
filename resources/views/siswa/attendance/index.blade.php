@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="h6">
                            Tombol Absensi
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-12">
                                <form id="createAtd">
                                    @csrf                                              
                                    <div class="form-group">
                                        @if ($atd == null)
                                            <button class="btn btn-info" id="submit" type="submit">Presensi</button>
                                        @elseif ($atd->time_out == '00:00:00')    
                                            <button class="btn btn-info" id="submit" type="submit">Presensi</button>
                                        @else
                                            <a class="btn btn-disabled" disabled >Presensi</a>
                                        @endif
                                    </div>
                                </form>    
                            </div>
                        </div>
                        <div class="row">
                            @if ($atd != null)    
                            <div class="col-6">
                                {{$atd->time_in}}
                                
                            </div>
                            <div class="col-6">
                                {{$atd->time_out}}
                                
                            </div>
                            @else
                            <div class="col-12">
                                <h6 class="text-center">Anda belum melakukan absensi</h6>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Attendance</h6>
                       
                      </div>
                    <div class="card-body">
                        
                       <table class="table table-strip ">
                        <thead>
                            <tr>
                                <th>Tanggal</th> 
                                <th>Waktu Datang</th> 
                                <th>Waktu Pulang</th> 
                                <th>Deskripsi</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                                
                            <tr>
                                <td>{{$attendance->date}}</td> 
                                <td>{{$attendance->time_in}}</td> 
                                <td>{{$attendance->time_out}}</td> 
                                <td>{{$attendance->description}}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                        </table>    
                </div>
            </div>
            @include('siswa.attendance.scriptcreatedata')
            
        @endsection
