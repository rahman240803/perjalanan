<!DOCTYPE html>
<html lang="en" id="day">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme9">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="card card-authentication1 mx-auto my-4">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo icon">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                    <form action="/postregister" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName" class="sr-only">NIK</label>
                            <div>Masukan Nik</div>
                            <div class="position-relative has-icon-right">
                                <input name="nik" type="number" id="exampleInputName" class="form-control input-shadow">
                                <div class="form-control-position">
                                    <i class="zmdi zmdi-accounts-list"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName" class="sr-only">Nama</label>
                          <div>Masukan Nama</div>
                          <div class="position-relative has-icon-right">
                              <input name="name" type="text" id="exampleInputName" class="form-control input-shadow">
                              <div class="form-control-position">
                                  <i class="icon-user"></i>
                              </div>
                          </div>
                      </div>
                    
                  
                        <div class="form-group">
                            <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                            <div>Masukan Email</div>
                            <div class="position-relative has-icon-right">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off">
                                <div class="form-control-position">
                                    <i class="icon-envelope-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <div>Masukan Password</div>
                            <div class="position-relative has-icon-right">
                                <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter your password" autocomplete="off">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
                            <div>Masukan Password Ulang</div>
                            <div class="position-relative has-icon-right">
                                <input type="password" id="exampleInputPassword" name="password_confirmation" class="form-control input-shadow" placeholder="Enter your password" autocomplete="off">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
                    </form>
                </div>
               
            </div>

            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->

            <!--start color switcher-->
          
            <!--end color switcher-->

        </div>
        <!--wrapper-->

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- sidebar-menu js -->
        <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

        <!-- Custom scripts -->
        <script src="{{ asset('assets/js/app-script.js') }}"></script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#day",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x846084,
  backgroundColor: 0x1a191b,
  points: 8.00,
  spacing: 16.00
})
</script>

</html>
