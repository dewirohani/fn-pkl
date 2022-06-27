<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/students/'+id,
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nis").val(data.nis);
					$("#nama_siswa").val(data.name);
					$("#kelas").val(data.grade_id);
					$("#jurusan").val(data.major_id);
					$("#alamat_siswa").val(data.address);
					$("#tempat_lahir").val(data.place_of_birth);
					$("#tanggal_lahir").val(data.date_of_birth);
					$("#jenis_kelamin").val(data.gender);
					$("#agama").val(data.religion);
					$("#no_hp").val(data.phone);
					$("#tahun_masuk").val(data.year_of_entry);
					$("#user").val(data.user_id);
			}
	});
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
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

		var data = {
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
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/students/'+{{$id}},
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
        location.href = '/students';
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