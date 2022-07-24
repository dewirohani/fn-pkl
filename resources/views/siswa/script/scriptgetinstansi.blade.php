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
        $.ajax({
            type:'GET',
            url:'http://192.168.43.215:8000/api/places',
            headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
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

