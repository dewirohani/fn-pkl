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
    var kelas = $("#kelas").val();
    var jurusan = $("#jurusan").val();
    var periode = $("#periode").val();
    var du_di = $("#du_di").val();
    var status = $("#status").val();
    var hasil = {
        student_id: nama_siswa,
        grade_id: kelas,
        major_id: jurusan,
        period_id: periode,
        internship_place_id: du_di,
        status: status,
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/submissions',
        headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-submissions';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>