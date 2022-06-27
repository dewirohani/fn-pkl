<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/periods/'+id,
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nama_periode").val(data.nama_periode);
					$("#tanggal_mulai").val(data.start_date);
					$("#tanggal_berakhir").val(data.end_date);
					$("#status").val(data.status);					
			}
	});
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_periode = $("#nama_periode").val();
		var tanggal_mulai = $("#tanggal_mulai").val();
		var tanggal_berakhir = $("#tanggal_berakhir").val();
		var status = $("#status").val(); 

		var data = {
        nama_periode: nama_periode,
        start_date: tanggal_mulai,
        end_date: tanggal_berakhir,
        status: status,        
    };

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/periods/'+{{$id}},
			headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
        location.href = '/periods';
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