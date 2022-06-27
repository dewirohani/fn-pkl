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
    var id_pengajuan = $("#id_pengajuan").val();
    var nama_siswa = $("#nama_siswa").val();
    var periode = $("#periode").val();
    var du_di = $("#du_di").val();
    var guru = $("#guru").val();
    var kelas = $("#kelas").val();
    var jurusan = $("#jurusan").val();
    
    var hasil = {
        internship_submission_id: id_pengajuan,
        student_id: nama_siswa,
        period_id: periode,
        internship_place_id: du_di,
        teacher_id: guru,
        grade_id: kelas,
        major_id: jurusan,
        
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/internship-placements',
        headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-placements';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>