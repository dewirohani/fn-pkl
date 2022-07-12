{{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
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
            function logout(e)
                {
                    let id = e.getAttribute('data-id');
                    Swal.fire({
                icon: 'error',
                title: 'Logout',
                text: "Apakah anda yakin ingin keluar??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                            type: "POST",
                            url: "http://localhost/pa/backend/public/api/logout",
                            data: {"_method": "POST"},
                            headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        	},
                        }).then((result) => {
                            location.reload();
                            Swal.fire({
                                icon: 'success',
                                title: "Logout!",
                                text: "Data berhasil di keluar",
                                showConfirmButton: true,
                            });
                        });
                }else if(result.isDenied){
                    Swal.fire({
                        icon: 'error',
                        title: "Cancelled",
                        text: "Logout data dibatalkan :)",
                    });
                }
            });
        }
                           
        </script> --}}

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
$("#logout").click(function(){
    
    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/logout',
        headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        	},    
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/login';
        Swal.fire({
            icon: 'success',
            title: "Logout!",
            text: "Anda berhasil keluar",
            showConfirmButton: true,
        });
    });
});

</script>