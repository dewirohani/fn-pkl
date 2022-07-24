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
            url:'http://192.168.43.215:8000/api/grades',
            headers: {
            'Accept':'*/*',
            'Authorization':'Bearer '+ getCookie('token'),
        },
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

