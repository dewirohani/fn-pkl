<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/teachers/'+id,
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nip").val(data.nip);
					$("#nama_guru").val(data.name);					
					$("#alamat_guru").val(data.address);
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
		var nip = $("#nip").val();
		var nama_guru = $("#nama_guru").val();		
		var alamat_guru = $("#alamat_guru").val();
		var tempat_lahir = $("#tempat_lahir").val();
		var tanggal_lahir = $("#tanggal_lahir").val();
		var jenis_kelamin = $("#jenis_kelamin").val();
		var agama = $("#agama").val();
		var no_hp = $("#no_hp").val();		
		var user = $("#user").val();
		
		var data = {
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
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/teachers/'+{{$id}},
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
        location.href = '/teachers';
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