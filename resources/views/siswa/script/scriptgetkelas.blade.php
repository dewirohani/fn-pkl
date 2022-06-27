<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://127.0.0.1:8000/api/grades',
            dataType: "json",
            success:function(data){
                $("#kelas").empty();
                $("#kelas").append('<option value="0" disabled="true selected="true">Pilih Kelas</option>');
                $.each(data,function(key, value){
                    $("#kelas").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
    });
</script>

