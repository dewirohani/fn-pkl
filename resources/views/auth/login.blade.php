<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login | PKL</title>
</head>
<body style="background-color: blue">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; ">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../assets/img/logo.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; margin-top:50px" />
            </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                <form class="user" id="login">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h2 fw-bold mb-0">PKL SMKN 3 PAMEKASAN</span>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Email">
                        <small class="text-danger" id="email-error"></small>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                        <small class="text-danger" id="password-error"></small>
                    </div>
                    <div class="pt-4 mb-5">
                        <button type="submit" id="submit"
                            class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
    
</body>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>

{{-- @include('admin.script.scriptcookie') --}}

<script type="text/javascript">
  $("#login").on('submit', function(event) {
      event.preventDefault();
      $(".preloader").fadeIn();
      let formData = new FormData(this);
      $('#email-error').text('');
      $('#password-error').text('');
      $('#message-error').text('');

      $.ajax({
          url: "http://localhost/pa/backend/public/api/login",
          type: "POST",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(response) {
              $(".preloader").fadeOut();
              if (response.success) {
                  document.cookie = "token=" + response.token;
                  sessionStorage.setItem('success', response.message);
                  // console.log(document.cookie);
                  window.location.href = "{{ route('majors.index') }}";
              }
          },
          error: function(response) {
              $(".preloader").fadeOut();
              $('#email-error').text(response.responseJSON.email);
              $('#password-error').text(response.responseJSON.password);
              $('#message-error').text(response.responseJSON.message);
          },
      });   
  });
  window.getCookie = function(name) {
  var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  if (match) return match[2];
  console.log(document.cookie);
  }
</script>
{{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script>

  function login(e) {
    var results = '';
  
  var username = $("#username").val();
  var password = $("#password").val();

  var hasil = {
    username: username,
    password: password,
  };
    $.ajax({
        type: "POST",
        url: "http://127.0.0.1:8000/api/login",
        data: JSON.stringify(hasil),
        datatype: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
          console.log(data);
                location.href = '/admin';
            },
        error: function (data) {
          console.log(data);
        }
    })
  };

</script> --}}
</html>