<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/internship-placements/'+id,
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#id_pengajuan").val(data.internship_submission_id);
					$("#nama_siswa").val(data.student_id);					
					$("#periode").val(data.period_id);
					$("#du_di").val(data.internship_place_id);
					$("#guru").val(data.teacher_id);					
					$("#kelas").val(data.grade_id);
					$("#jurusan").val(data.major_id);
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var id_pengajuan = $("#id_pengajuan").val();
		var nama_siswa = $("#nama_siswa").val();
		var periode = $("#periode").val();
		var du_di = $("#du_di").val();
		var guru = $("#guru").val();
		var kelas = $("#kelas").val();
		var jurusan = $("#jurusan").val(); 

		var data = {
        internship_submission_id: id_pengajuan,
        student_id: nama_siswa,
        period_id: periode,
        internship_place_id: du_di,
        teacher_id: guru,
        grade_id: kelas,
        major_id: jurusan,
        
    };

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/internship-placements/'+{{$id}},
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
			location.href = '/internship-placements';
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