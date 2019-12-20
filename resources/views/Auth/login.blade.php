<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="bootstrap/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="bootstrap/dashboard/css/sb-admin-2.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="bootstrap/dashboard/css/util.css">


</head>

<!-- <body class="bg-gradient-primary"> -->
<body  class="container-login100" style="background-image: url('images/bg-01.jpg');">

  <!-- <div class="container"> -->

  <!-- <div class="container-login100" style="background-image: url('images/bg-01.jpg');"> -->


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <!-- <div class="col-xl-10 col-lg-12 col-md-9"> -->

        <div class="card o-hidden border-0 shadow-lg my-5  mt-10">
            <!-- Nested Row within Card Body -->
              <div class="wrap-login100 pt-10 mt-10">
                <div class="p-5">
                  <div class="text-center pb-10">

                   <span class="p-b-37 pb-10 " style="font-size:60px; font-family: SourceSansPro-Bold;">Login</span>

                  </div>
                  <form class="user pt-10">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-rounded" id="exampleInputEmail" aria-describedby="emailHelp" placeholder=" Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-rounded" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
<!--                       <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div> -->
                    </div>

                    <div class="m-r-50 m-l-50 m-t-30">
                      
                    <a href="{{ route('dashboard')}}" class="btn btn-primary btn-user btn-block ">
                      Login
                    </a>

                    </div>



                  </form>
<!--                   <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->
                  <div class="text-center m-t-10">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
        <!-- </div> -->

      <!-- </div> -->

    </div>

    </div>

  <!-- </div> -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
