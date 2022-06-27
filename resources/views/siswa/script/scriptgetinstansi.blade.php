<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type:'GET',
            url:'http://127.0.0.1:8000/api/places',
            dataType: "json",
            success:function(data){
                $("#du_di").empty();
                $("#du_di").append('<option value="0" disabled="true selected="true">Pilih Du/Di</option>');
                $.each(data,function(key, value){
                    $("#du_di").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
    });
</script>

