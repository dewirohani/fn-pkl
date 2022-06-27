<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://localhost/pa/backend/public/api/majors',
            dataType: "json",
            success:function(data){
                $("#jurusan").empty();
                $("#jurusan").append('<option value="0" disabled="true selected="true">Pilih Jurusan</option>');
                $.each(data,function(key, value){
                    $("#jurusan").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
    });
</script>

