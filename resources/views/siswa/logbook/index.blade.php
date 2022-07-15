@extends('app')
@section('content')
    <div class="content">
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Logbook</h6>
                  <a href="{{ route('logbooks.create') }}">
                    <button class="btn btn-success mr-2" style="float: right"><i class="fa fa-plus"></i></button>
                  </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        {{-- <th>Attendance</th> --}}
                        <th>Nama Siswa</th>                      
                        <th>Guru</th>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Status</th>
                        <th>File</th>                       
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                        <th>#</th>
                        {{-- <th>Attendance</th> --}}
                        <th>Nama Siswa</th>                      
                        <th>Guru</th>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Status</th>
                        <th>File</th>                         
                        <th>Action</th>
                    </tfoot>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        // var api = "{{env('API_URL')}}";

        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('logbooks.index') }}",
                type: 'GET',
            },
            "responsive": true,
            "language": {
                "oPaginate": {
                    "sNext": "<i class='fas fa-angle-right'>",
                    "sPrevious": "<i class='fas fa-angle-left'>",
                },
               
            },
            columns: [{
                    data: 'DT_RowIndex',
                },
                // {
                //     data: 'attendance_id',
                // },
                {
                    data: 'student_id',
                },             
                {
                    data: 'teacher_id',
                },
                {
                    data: 'date',
                },
                {
                    data: 'activity',
                },
                {
                    data: 'status_id',
                },
                {
                    data: 'file',
                },                          
                {
                    data: 'action',
                },
            ],
        });
    });
</script>     

@endsection
