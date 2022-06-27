<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/submissions/'+id,
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			dataType: "json",
			success: function(data){
					$("#nama_siswa").val(data.student_id);
					$("#kelas").val(data.grade_id);
					$("#jurusan").val(data.major_id);
					$("#periode").val(data.period_id);					
					$("#du_di").val(data.internship_place_id);					
					$("#status").val(data.status);					
									
			}
	});
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var du_di = $("#du_di").val();
		var data = {
        internship_place_id: du_di,
    	};

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/submissions/'+{{$id}},
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
        location.href = '/internship-submissions';
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