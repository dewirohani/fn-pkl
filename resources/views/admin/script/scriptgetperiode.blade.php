<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://localhost/pa/backend/public/api/periods',
            dataType: "json",
            success:function(data){
                $("#periode").empty();
                $("#periode").append('<option value="0" disabled="true selected="true">Pilih Periode</option>');
                $.each(data,function(key, value){
                    $("#periode").append('<option value="'+value.id+'">'+value.nama_periode+'</option>');
                });
            }
        });
    });
</script>

