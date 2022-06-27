<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/attendances/'+id,
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nama_siswa").val(data.student_id);
					$("#tanggal").val(data.date_of_absent);					
					$("#waktu").val(data.time_of_absent);
					$("#lokasi").val(data.location);
					$("#foto").val(data.photo);
					$("#signature").val(data.signature);				
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_siswa = $("#nama_siswa").val();
		var tanggal = $("#tanggal").val();
		var waktu = $("#waktu").val();
		var lokasi = $("#lokasi").val();
		var foto = $("#foto").val();
		var signature = $("#signature").val();  

		var data = {
			student_id: nama_siswa,
			date_of_absent: tanggal,
			time_of_absent: waktu,
			location: lokasi,
			photo	: foto,
			signature: signature,
    	};

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/attendances/'+{{$id}},
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
			location.href = '/attendances';
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