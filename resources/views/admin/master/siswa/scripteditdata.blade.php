<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script>
        $("#editJurusan").on('submit', function(event){
            event.preventDefault();
            $(".preloader").fadeIn();
            let id = $('#id').val();
            // let id = e.getAttribute('data-id');
            let formData = new FormData(this);
                $.ajax({
                    url: "http://192.168.43.215:8000/api/students/"+id,
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
                                    location.href = '/students';
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
