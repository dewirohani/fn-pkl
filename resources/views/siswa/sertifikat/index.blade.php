@extends('app')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Sertifikat</h4>
                    </div>
                    <div class="card-body">
                        <form id="downloadCertificate" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="text" id="id" hidden value="{{ $internship_certificate->id }}"> --}}
                            {{-- <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="student_id" id="student_id">
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Guru Pembimbing</label>
                                 <select name="teacher_id" id="teacher_id" class="form-control teacher_id">
                                    <option value="" disabled="true">Pilih Siswa</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Sertifikat</label><br>
                                 <button class="btn btn-info" id="submit" type="submit"><i class="fas fa-download"> Download</i></button>
                              </div>                                               
                        </form>
                    </div>
                </div>
            </div>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
 $("#downloadCertificate").on('submit', function(event){
            event.preventDefault();
            $(".preloader").fadeIn();
            let id = $('#id').val();
            let formData = new FormData(this);
                $.ajax({
                    url: "http://localhost/pa/backend/public/api/certificates/download/"+id,
                    type: "POST",
                    headers: {
                        'Accept':'*/*',
                        'Authorization':'Bearer '+ getCookie('token'),
                    },
                    contentType: 'application/json',
                    data: formData,
                    cache: false,
                    contentType : false,
                    processData: false,
                    success : function(response){
                        $(".preloader").fadeOut();
                        if (response.success){
                            // window.location.href = "{{route('majors.index')}}";
                            // sessionStorage.setItem('success',response.message);
                            Swal.fire({
                                    icon: 'success',
                                    title: response.message,
                                    toast: true,
                                    showConfirmButton: false,
                                    timer: 1500,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    },
                                    position: 'top-right'
                                }).then((result) => {
                                    // Reload the Page
                                    location.reload();
                                })
                        }
                    }, 
                    error: function(response){
                        $(".preloader").fadeOut();
                        swal.fire({
                                icon: 'error',
                                title: response.responseJSON.message,
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                },
                                toast: true,
                                position: 'top-right'
                            })
                    }
              
                });
            });
</script>

@endsection
