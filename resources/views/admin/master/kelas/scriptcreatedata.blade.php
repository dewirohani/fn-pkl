<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var kelas = $("#kelas").val();
    var jurusan = $("#jurusan").val();
    var total_siswa = $("#total_siswa").val();
    var deskripsi = $("#deskripsi").val();
    var hasil = {
        name: kelas,
        major_id: jurusan,
        total_student: total_siswa,
        description: deskripsi
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/grades',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/grades';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>