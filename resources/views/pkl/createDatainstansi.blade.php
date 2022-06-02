@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Instansi</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama_instansi" placeholder="Nama">
                            </div>                                                    
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat_instansi" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                            </div> 
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota_instansi" placeholder="Kota">
                            </div> 
                            <div class="form-group">
                                <label>Pembimbing Du/Di</label>
                                <input type="text" class="form-control" name="pembimbing_du_di" placeholder="Pembimbing Du/Di">
                            </div> 
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" name="kontak" placeholder="Kontak">
                            </div> 
                            <div class="form-group">
                                <label>Kuota</label>
                                <input type="number" class="form-control" name="kuota" placeholder="Kuota">
                            </div> 

                            <div class="form-group">
                                <button class="btn btn-info">Simpan</button>
                                <button class="btn btn" style="background-color: grey">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
