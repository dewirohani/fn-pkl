<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
        type:'GET',
        url:'http://localhost/pa/backend/public/api/grades/'+id,
        dataType: "json",
        success: function(data){
            console.log(data);
                $("#kelas").val(data.name);
                $("#jurusan").val(data.major_id);
                $("#total_siswa").val(data.total_student);
                $("#deskripsi").val(data.description);
        }
	});

    $("#sbmbtn").click(function(){
        event.preventDefault();
        var kelas = $("#kelas").val();
        var jurusan = $("#jurusan").val();
        var total_siswa = $("#total_siswa").val();
        var deskripsi = $("#deskripsi").val();
        var data = {
            name: kelas,
            major_id: jurusan,
            total_student: total_siswa,
            description: deskripsi
        };

        $.ajax({
            type: "PATCH",
            url: 'http://localhost/pa/backend/public/api/grades/'+{{$id}},
            data: JSON.stringify(data),
            contentType: 'application/json',
        }).then((result) => {
            location.href = '/grades';
            Swal.fire({
                icon: 'success',
                title: "Update!",
                text: "Data berhasil di update",
                showConfirmButton: true,
            });
        });
    });
});

</script>