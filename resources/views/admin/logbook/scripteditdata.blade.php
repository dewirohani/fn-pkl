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
			url:'http://localhost/pa/backend/public/api/logbooks/'+id,
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        	},
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nama_siswa").val(data.student_id);
					$("#guru").val(data.teacher_id);					
					$("#tanggal").val(data.date_of_logbook);
					$("#waktu_mulai").val(data.start_time);
					$("#waktu_berakhir").val(data.end_time);
					$("#kegiatan").val(data.activity);				
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_siswa = $("#nama_siswa").val();
		var guru = $("#guru").val();
		var tanggal = $("#tanggal").val();
		var waktu_mulai = $("#waktu_mulai").val();
		var waktu_berakhir = $("#waktu_berakhir").val();
		var kegiatan = $("#kegiatan").val();

		var data = {
			student_id: nama_siswa,
			teacher_id: guru,
			date_of_logbook: tanggal,
			start_time: waktu_mulai,
			end_time: waktu_berakhir,
			activity: kegiatan,
    	};

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/logbooks/'+{{$id}},
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        	},
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
			location.href = '/logbooks';
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