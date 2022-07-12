<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
{{-- <script>
    function getCookie(name){
        let cookie = {};
        document.cookie.split(';').forEach(function(el)
        {
            let[k, v] = el.split('=');
            cookie[k.trim()]=v;
        })
        
        return cookie[name];
    }
</script> --}}
<script>
    $(document).ready(function () {
    $("#createJurusan").on('submit', function(event){
        
        event.preventDefault();
        let formData = new FormData(this);
                $.ajax({
                    url: "http://localhost/pa/backend/public/api/majors",
                    type: "POST",
                    headers: {
                        'Accept':'*/*',
                        'Authorization':'Bearer '+ getCookie('token'),
                    },
                    data: formData, 
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                            // console.log(response);
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
                                    location.href = '/majors';
                                })
                            },
                    error: function(response, error){   
                        // var err = eval("(" + xhr.response.message")");
                        // console.log(response.responseJSON);                     
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
    });
    </script>