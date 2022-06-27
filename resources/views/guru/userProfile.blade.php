@extends('app')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-8" style="margin-left:15%" >
        <div class="card card-user">
          <div class="image" style="background-color:grey" >
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
                <h5 class="title text-dark">Dedy Irawan</h5>
              </a>             
            </div>
            <p class="title text-center text-dark">Rekayasa Perangkat Lunak <br></p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h6>Alamat<br><small>Betet</small></h6>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h6>Jenis Kelamin<br><small>Laki-Laki</small></h6>
                </div>
                <div class="col-lg-2 mr-auto">
                  <h6>Agama<br><small>Islam</small></h6>
                </div>
                <div class="col-lg-3 mr-auto">
                    <h6>No HP<br><small>0877908654321</small></h6>
                  </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection