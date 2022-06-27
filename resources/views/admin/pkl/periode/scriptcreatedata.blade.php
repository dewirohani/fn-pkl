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
$("#sbmbtn").click(function(){
    var nama_periode = $("#nama_periode").val();
    var tanggal_mulai = $("#tanggal_mulai").val();
    var tanggal_berakhir = $("#tanggal_berakhir").val();
    var status = $("#status").val();   
    var hasil = {
        nama_periode: nama_periode,
        start_date: tanggal_mulai,
        end_date: tanggal_berakhir,
        status: status,        
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/periods',
        headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/periods';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>