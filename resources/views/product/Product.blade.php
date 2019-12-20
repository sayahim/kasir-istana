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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="{{ route('product') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Produk</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

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
          <div class="d-sm-flex justify-content-between ml-20">
            <h1 class="h3 mt-10 text-gray-800 font-weight-bold">Daftar Produk</h1>

          </div>

        </div>
        <!-- End of Topbar -->

    <!-- Outer Row -->

     <!-- Content Wrapper -->
    <div >

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header">
                  <a href="{{ route('product_create')}}" class="btn btn-success btn-icon-split btn-lg">
                    <span class="text">Tambah Produk</span>
                  </a>
            </div>

          <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th></th>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->stock }}</td>
                        <td>{{ $datas->price_buy }}</td>
                        <td>{{ $datas->price_sell }}</td>
                        <td>
                          <form>
                            <a href="{{ route('products.edit', $datas->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('destroy_product', $datas->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>

                          </form>


                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
          </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->   

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


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
