<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nama_siswa = $("#nama_siswa").val();
    var guru = $("#guru").val();
    var tanggal = $("#tanggal").val();
    var waktu_mulai = $("#waktu_mulai").val();
    var waktu_berakhir = $("#waktu_berakhir").val();
    var kegiatan = $("#kegiatan").val();
    var hasil = {
        student_id: nama_siswa,
        teacher_id: guru,
        date_of_logbook: tanggal,
        start_time: waktu_mulai,
        end_time: waktu_berakhir,
        activity: kegiatan,
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/logbooks',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/logbooks';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>