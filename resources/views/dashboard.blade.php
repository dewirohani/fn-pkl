@extends('app')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Siswa</h5>
            {{-- <p class="card-category">24 Hours performance</p> --}}
          </div>
          <div class="card-body ">
            <canvas id=chartHours width="400" height="100"></canvas>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="fa fa-history"></i> Updated
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection