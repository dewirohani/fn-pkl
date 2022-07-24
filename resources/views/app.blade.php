<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo.png')}}">
    <title>
        PKL SMKN 3 PAMEKASAN
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    @yield('style')

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="default">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{asset('assets/img/logo.png')}}">
                    </div>
                </a>
                <a href="#" class="simple-text logo-normal">
                    SMKN 3 PAMEKASAN
                </a>
            </div>
            <div class="sidebar-wrapper">    
                @php
                $token = substr(\Request::Header('cookie'),'6',strpos(substr(\Request::Header('cookie'),'6'), ";"));
                $user = \Http::withHeaders([
                    'Authorization' => 'Bearer ' .$token,
                    'ContentType' => 'application/json',
                    'Accept' => 'application/json',
                ])->get('http://192.168.43.215:8000/api/user')->json();
                $auth = json_decode(json_encode($user))->data;
                @endphp
                @include('menu')
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown"> 
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i><span class="ml-2 d-none d-lg-inline text-black small">{{ $auth->username }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">                                
                                <a class="dropdown-item" href="#">Profile</a>
                                <form id="logout">
                                    @csrf
                                    <button class="dropdown-item" type="submit" id="submit">Logout</button>
                                </form>
                            </div>
                        </li>                                           
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- content -->
            @yield('content'),
          

            <!-- End content -->
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="credits ml-auto">
                        <span class="copyright">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, PKL SMKN 3 PAMEKASAN
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>
        $(document).ready(function () {
          $('#dataTable').DataTable(); // ID From dataTable 
        });
    </script>
    <script>
        function getCookie(name){
            let cookie = {};
            document.cookie.split(';').forEach(function(el){
                let[k, v] = el.split('=');
                cookie[k.trim()]=v;
            })
            return cookie[name];
        }
    </script>
    <script>
    $("#logout").on('submit', function(event) {
            event.preventDefault();
            $(".preloader").fadeIn();

            $.ajax({
                url: "http://192.168.43.215:8000/api/logout",
                type: "POST",
                headers: {
                    'Authorization': 'Bearer ' + getCookie('token'),
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    $(".preloader").fadeOut();
                    if (response.success) {
                        window.location.href = "/home";
                        document.cookie.split(";").forEach(function(c) {
                            document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" +
                                new Date().toUTCString() + ";path=/");
                        });
                    }
                },
            });
        });
    </script>
</body>
</html>


{{-- @include('admin.script.scriptlogout')                                  --}}