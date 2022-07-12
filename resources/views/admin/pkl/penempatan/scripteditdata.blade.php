<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script>
    function getCookie(name){
        let cookie = {};
        document.cookie.split(';').forEach(function(el)
        {
            let[k, v] = el.split('=');
            cookie[k.trim()]=v;
        })
        
        return cookie[name];
    }
</script>
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
					$("#nama_siswa").val(data.student);
					$("#kelas").val(data.grade);
					$("#jurusan").val(data.major);
					$("#periode").val(data.period);
					$("#guru").val(data.teacher);
					$("#du_di").val(data.place);
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_siswa = $("#nama_siswa").val();
		var kelas = $("#kelas").val();
		var jurusan = $("#jurusan").val(); 
		var periode = $("#periode").val();
		var guru = $("#guru").val();
		var du_di = $("#du_di").val();

		var data = {
			student_id: nama_siswa,
			grade_id: kelas,
			major_id: jurusan,
			period_id: periode,
			teacher_id: guru,
			internship_place_id: du_di
		};
	// 

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