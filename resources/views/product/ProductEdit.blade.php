<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kasir Istana</title>

  <!-- Custom fonts for this template-->
  <link href="bootstrap/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/design_assets/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="bootstrap/dashboard/css/admin.css" rel="stylesheet">
  <link href="bootstrap/dashboard/css/style.css" rel="stylesheet">
  <link href="bootstrap/dashboard/css/util.css" rel="stylesheet">
  <link href="bootstrap/dashboard/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="sidebarToggle"> -->

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Produk</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kategori</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Sidebar Toggler (Sidebar) -->
<!--       <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->

    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->

    <div id="content">
      
        <!-- Topbar -->
        <div class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

          <!-- Page Heading -->
          <div class="mt-10 ">

            <div class="justify-content-between">

                  <!-- title and back -->
                  <a href="{{ route('product')}}" class="btn btn-light btn-icon-split m-b-10">
                    <span class="icon text-gray-600">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                  </a>
                    <span class="h3 m-l-20 text-gray-800 font-weight-bold">Edit Produk</span>

            </div>

          </div>


        </div>
        <!-- End of Topbar -->


    <!-- Outer Row -->
    <div class="justify-content-center m-l-80 m-r-80">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <!-- Nested Row within Card Body -->

                <div class="p-l-50 p-r-50 p-b-30 p-t-30">

                  <form method="post" action="{{ route('input_product')}}" class="user">
                    @csrf

                    <h1 class="text-gray-800 fs-15 margin-layout-5 font-weight-bold">Nama Produk</h1>
                    <div class="form-group">
                      <input name="name" class="form-control form-control-rounded padding-layout-10" aria-describedby="emailHelp" placeholder=" Nama Produk" value="{{ $product->name }} ">
                    </div>

                    <div class="row">

                      <div class="col-md-6">

                        <h1 class="text-gray-800 fs-15 margin-layout-5 font-weight-bold">Harga Beli</h1>

                        <div class="form-group">
                        <input name="price_buy" class="form-control form-control-rounded" placeholder="Harga Beli" value="{{ $product->price_buy }} ">
                        </div>

                      </div>

                      <div class="col-md-6">

                        <h1 class="text-gray-800 fs-15 margin-layout-5 font-weight-bold">Harga Jual</h1>

                        <div class="form-group">
                        <input name="price_sell" class="form-control form-control-rounded" placeholder="Harga Jual" value="{{ $product->price_sell }} ">
                        </div>

                      </div>

                    </div>

                    <h1 class="text-gray-800 fs-15 margin-layout-5 font-weight-bold">Pilih Kategori</h1>

                    <div class="styled-select m-b-20" id="category-select">
                      <select>
                        <option value="">Pilih Kategori</option>
                        <option value="Aku">Aku</option>
                        <option value="Kamu">Kamu</option>
                        <option value="Dia">Dia</option>
                      </select>
                    </div>

                    <div class="form-group"> 
                      <h1 class="text-gray-800 fs-15 margin-layout-5 font-weight-bold">Deskripsi</h1>
                      <textarea name="description" type="description" class="form-description" rows="5" placeholder="Deskripsi" value="{{ $product->description }}" ></textarea>
                    </div>
                    <div class="form-group">

                    </div>


                  <div>
                    
                    <button type="submit" class="btn btn-success btn-icon-split btn-lg">
                      <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                      </span>
                      <span class="text">Simpan Produk</span>
                    </button>
                  </div>

                  </form>

                </div>
              <!-- </div> -->

        </div>

    </div>

    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="bootstrap/dashboard/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="bootstrap/dashboard/js/demo/chart-area-demo.js"></script>
  <script src="bootstrap/dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>
