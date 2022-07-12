<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    function getCookie(name){
        let cookie = {};
        document.cookie.split(';').forEach(function(el)
        {
            let[k, v] = el.split('=');
            cookie[k.trim()]=v;
        })
        
        return cookie[name];
    }
</script>
        <script>
            function editStatus(e)
                {
                    let id = e.getAttribute('data-id');
                    Swal.fire({
                icon: 'question',
                title: 'Acc Pengajuan',
                text: "Apakah anda yakin ingin meng Acc pengajuan ini??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    
                    $.ajax({
                            type: "POST",
                            url: "http://localhost/pa/backend/public/api/internship-placements",
                            headers: {
                                'Accept':'*/*',
                                'Authorization':'Bearer '+ getCookie('token'),
                            },
                            // data: {"_method": "PATCH"},
                            data: JSON.stringify({
                                internship_submission_id : id,
                            }),
                            contentType: 'application/json'
                        });
                    $.ajax({
                            type: "PATCH",
                            url: "http://localhost/pa/backend/public/api/submissions/"+id,
                            headers: {
                                'Accept':'*/*',
                                'Authorization':'Bearer '+ getCookie('token'),
                            },
                            // data: {"_method": "PATCH"},
                            data: JSON.stringify({
                                status : 'Acc',
                            }),
                            contentType: 'application/json'
                        }).then((result) => {
                            location.reload();
                            Swal.fire({
                                icon: 'success',
                                title: "ACC!",
                                text: "Pengajuan berhasil di Acc",
                                showConfirmButton: true,
                            });
                        });
                }else if(result.isDenied){
                    Swal.fire({
                        icon: 'error',
                        title: "Cancelled",
                        text: "Menghapus data dibatalkan :)",
                    });
                }
            });
        }

        </script>