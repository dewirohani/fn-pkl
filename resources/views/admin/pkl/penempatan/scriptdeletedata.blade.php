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
            function deleteData(e)
                {
                    let id = e.getAttribute('data-id');
                    Swal.fire({
                icon: 'error',
                title: 'Hapus Data!',
                text: "Apakah anda yakin ingin menghapus data ini??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                            type: "POST",
                            url: "http://localhost/pa/backend/public/api/internship-placements/"+id,
                            data: {"_method": "DELETE"},
                            headers: {
                            'Accept':'*/*',
                            'Authorization':'Bearer '+ getCookie('token'),
                        },
                        }).then((result) => {
                            location.reload();
                            Swal.fire({
                                icon: 'success',
                                title: "Deleted!",
                                text: "Data berhasil di hapus",
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