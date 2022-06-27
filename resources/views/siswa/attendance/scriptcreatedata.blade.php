<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nama_siswa = $("#nama_siswa").val();
    var tanggal = $("#tanggal").val();
    var waktu = $("#waktu").val();
    var lokasi = $("#lokasi").val();
    var foto = $("#foto").val();
    var signature = $("#signature").val();
    var hasil = {
        student_id: nama_siswa,
        date_of_absent: tanggal,
        time_of_absent: waktu,
        location: lokasi,
        photo	: foto,
        signature: signature,
    };

    $.ajax({
        type: 'POST',
        url: 'http://127.0.0.1:8000/api/attendances',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/attendance';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>