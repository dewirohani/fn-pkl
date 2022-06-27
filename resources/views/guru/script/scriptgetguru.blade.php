<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://127.0.0.1:8000/api/teachers',
            dataType: "json",
            success:function(data){
                $("#guru").empty();
                $("#guru").append('<option value="0" disabled="true selected="true">Pilih Guru Pembimbing</option>');
                $.each(data,function(key, value){
                    $("#guru").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
    });
</script>

