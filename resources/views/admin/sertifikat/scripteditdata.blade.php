<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/certificates/'+id,
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nama_siswa").val(data.student_id);
					$("#guru").val(data.teacher_id);					
					$("#sertifikat").val(data.name);
							
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_siswa = $("#nama_siswa").val();
		var guru = $("#guru").val();
		var sertifikat = $("#sertifikat").val();  

		var data = {
			student_id: nama_siswa,
			teacher_id: guru,
			name: sertifikat,  
    	};

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/certificates/'+{{$id}},
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
			location.href = '/internship-certificates';
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