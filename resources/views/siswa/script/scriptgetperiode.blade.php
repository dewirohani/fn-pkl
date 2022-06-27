<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://127.0.0.1:8000/api/periods',
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

