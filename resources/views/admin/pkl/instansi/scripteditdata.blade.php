<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
$(document).ready(function(){
	var id = {{ $id }};
	$.ajax({
			type:'GET',
			url:'http://localhost/pa/backend/public/api/places/'+id,
			dataType: "json",
			success: function(data){
				console.log(data);
					$("#nama_instansi").val(data.name);
					$("#alamat_instansi").val(data.address);					
					$("#kecamatan").val(data.districts);
					$("#kota_instansi").val(data.city);
					$("#pembimbing_du_di").val(data.mentor);
					$("#kontak").val(data.phone);
					$("#kuota").val(data.quota);
					$("#guru").val(data.teacher_id);
			}
	});
		
	
	$("#sbmbtn").click(function(){
		event.preventDefault();
		var nama_instansi = $("#nama_instansi").val();
		var alamat_instansi = $("#alamat_instansi").val();
		var kecamatan = $("#kecamatan").val();
		var kota_instansi = $("#kota_instansi").val();
		var pembimbing_du_di = $("#pembimbing_du_di").val();
		var kontak = $("#kontak").val();
		var kuota = $("#kuota").val();   
		var guru = $("#guru").val();   

		var data = {
        name: nama_instansi,
        address: alamat_instansi,
        districts: kecamatan,
        city: kota_instansi,
        mentor: pembimbing_du_di,
        phone: kontak,
        quota: kuota,
        teacher_id: guru,
    	};

		$.ajax({
			type: "PATCH",
			url: 'http://localhost/pa/backend/public/api/places/'+{{$id}},
			data: JSON.stringify(data),
			contentType: 'application/json',
		}).then((result) => {
			location.href = '/internship-places';
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