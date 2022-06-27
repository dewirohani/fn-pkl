<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <script>
            function deleteData(e)
                {
                    let id = e.getAttribute('data-id');
                    Swal.fire({
                icon: 'error',
                title: 'Hapus Data!',
                text: "Apakah anda yakin ingin menghapus data ini??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                            type: "POST",
                            url: "http://127.0.0.1:8000/api/grades/"+id,
                            data: {"_method": "DELETE"},
                        }).then((result) => {
                            location.reload();
                            Swal.fire({
                                icon: 'success',
                                title: "Deleted!",
                                text: "Data berhasil di hapus",
                                showConfirmButton: true,
                            });
                        });
                }else if(result.isDenied){
                    Swal.fire({
                        icon: 'error',
                        title: "Cancelled",
                        text: "Menghapus data dibatalkan :)",
                    });
                }
            });
        }
                           
            $(document).ready(function(){        
                $.ajax({
                    type:'GET',
                    url:'http://127.0.0.1:8000/api/grades',
                    dataType: "json",
                    success:function(data){
                        $.each(data,function(key, value){
                            console.log(value);
                            $("#kelas").append(`
                            <tr> 
                                <td>${key+1}</td>
                                <td>${value.name}</td>
                                <td>${value.major_id}</td>
                                <td>${value.total_student}</td>
                                <td>${value.description}</td>
                                <td> 
                                    <button class="btn btn-warning btn-link edit"><ion-icon name="create"></ion-icon></button> 
                                    <button onclick="deleteData(this)" data-id="${value.id}" class="btn btn-danger btn-link delete"><ion-icon name="trash"></ion-icon></button>
                                </td>
                            </tr>
                            `);
                        });
                    }
                });
                         
            });
        </script>