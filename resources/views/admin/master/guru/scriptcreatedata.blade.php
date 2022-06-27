<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nip = $("#nip").val();
    var nama_guru = $("#nama_guru").val();
    var alamat_guru = $("#alamat_guru").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var jenis_kelamin = $("#jenis_kelamin").val();
    var agama = $("#agama").val();
    var no_hp = $("#no_hp").val();
    var user = $("#user").val();
    var hasil = {
        nip: nip,
        name: nama_guru,      
        address: alamat_guru,
        place_of_birth: tempat_lahir,
        date_of_birth: tanggal_lahir,
        gender: jenis_kelamin,
        religion: agama,
        phone: no_hp,
        user_id: user,
        
    };

    $.ajax({
        type:'POST',
        url: 'http://localhost/pa/backend/public/api/teachers',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/teachers';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>