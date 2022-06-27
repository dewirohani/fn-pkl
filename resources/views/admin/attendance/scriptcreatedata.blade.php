<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#presensi").click(function(){
    var nama_siswa = $("#nama_siswa").val();
    // var waktu = $("#waktu").val();

   
    var hasil = {
        student_id: nama_siswa,
        // time_of_absent: waktu,
       
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/attendances',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/attendances';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>