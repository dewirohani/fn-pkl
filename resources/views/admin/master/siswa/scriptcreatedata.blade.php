<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nis = $("#nis").val();
    var nama_siswa = $("#nama_siswa").val();
    var kelas = $("#kelas").val();
    var jurusan = $("#jurusan").val();
    var alamat_siswa = $("#alamat_siswa").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var jenis_kelamin = $("#jenis_kelamin").val();
    var agama = $("#agama").val();
    var no_hp = $("#no_hp").val();
    var tahun_masuk = $("#tahun_masuk").val();
    var user = $("#user").val();

    var hasil = {
        nis: nis,
        name: nama_siswa,
        grade_id: kelas,
        major_id: jurusan,
        address: alamat_siswa,
        place_of_birth: tempat_lahir,
        date_of_birth: tanggal_lahir,
        gender: jenis_kelamin,
        religion: agama,
        phone: no_hp,
        year_of_entry: tahun_masuk,
        user_id: user,
        };

    $.ajax({
        type: 'POST',
        url:'http://localhost/pa/backend/public/api/students',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/students';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>