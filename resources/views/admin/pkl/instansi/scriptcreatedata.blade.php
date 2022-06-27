<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nama_instansi = $("#nama_instansi").val();
    var alamat_instansi = $("#alamat_instansi").val();
    var kecamatan = $("#kecamatan").val();
    var kota_instansi = $("#kota_instansi").val();
    var pembimbing_du_di = $("#pembimbing_du_di").val();
    var kontak = $("#kontak").val();
    var kuota = $("#kuota").val();   
    var guru = $("#guru").val();   
    var hasil = {
        name: nama_instansi,
        address: alamat_instansi,
        districts: kecamatan,
        city: kota_instansi,
        mentor: pembimbing_du_di,
        phone: kontak,
        quota: kuota,
        teacher_id: guru,
    };

    $.ajax({
        type: 'POST',
        url: 'http://localhost/pa/backend/public/api/places',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-places';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>