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
    var nama_siswa = $("#nama_siswa").val();
    var guru = $("#guru").val();
    var sertifikat = $("#sertifikat").val();    
    var path = $("#path").val();    
    
    var hasil = {        
        student_id: nama_siswa,
        teacher_id: guru,
        name: sertifikat,        
        path: path,        
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/certificates',
        headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-certificates';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>