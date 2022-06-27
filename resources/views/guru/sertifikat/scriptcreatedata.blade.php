<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$("#sbmbtn").click(function(){
    var nama_siswa = $("#nama_siswa").val();
    var guru = $("#guru").val();
    var sertifikat = $("#sertifikat").val();    
    
    var hasil = {        
        student_id: nama_siswa,
        teacher_id: guru,
        name: sertifikat,        
    };

    $.ajax({
        type: 'POST',
        url: 'http://127.0.0.1:8000/api/certificate',
        data: JSON.stringify(hasil),
        contentType: 'application/json'
    }).then((result) => {
        location.href = '/internship-certificate';
        Swal.fire({
            icon: 'success',
            title: "Tersimpan!",
            text: "Data berhasil di Simpan",
            showConfirmButton: true,
        });
    });
});

</script>