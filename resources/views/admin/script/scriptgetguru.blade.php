<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://localhost/pa/backend/public/api/teachers',
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

