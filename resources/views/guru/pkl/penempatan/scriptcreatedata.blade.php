<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
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
        url: 'http://127.0.0.1:8000/api/internship-placements',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-placement';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>