<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php  echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo base_url().'administrator/cekuser'?>">Toko Amanah</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<!--         <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

      <!-- Navbar -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Hai,<?php echo $this->session->userdata('nama');?> </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>


    <div id="wrapper">
<?php $h=$this->session->userdata('akses'); ?>
<?php $u=$this->session->userdata('user'); ?>
<?php if($h=='1'){ ?> 
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/laporan'?>">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Laporan</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/grafik'?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Grafik</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengguna</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cog"></i>
            <span>System</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'administrator/logout'?>">Logout</a>
          </div>
        </li>
        <?php }?>
      </ul>
      <?php if($h=='2'){ ?> 
        <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'admin/penjualan'?>">Eceran</a>
            <a class="dropdown-item" href="<?php echo base_url().'admin/penjualan_grosir'?>">Grosir</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'admin/pelanggan'?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelanggan</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cog"></i>
            <span>System</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'administrator/logout'?>">Logout</a>
          </div>
        </li>
        </ul>
        <?php }?>
      <?php if($h=='3'){ ?> 
       <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'administrator/cekuser'?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cog"></i>
            <span>System</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url().'administrator/logout'?>">Logout</a>
          </div>
        </li>
        </ul>
        <?php }?>
      <?php if($h=='1'){ ?> 
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Penjualan Eceran</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-cubes"></i>
                  </div>
                  <div class="mr-5">Penjualan Grosir</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan_grosir'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Pelanggan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pelanggan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <div class="mr-5">Stock Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/barang'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-truck"></i>
                  </div>
                  <div class="mr-5">Suplier</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/suplier'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-sitemap"></i>
                  </div>
                  <div class="mr-5">Kategori</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kategori'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Pembelian Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pembelian'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-tags"></i>
                  </div>
                  <div class="mr-5">Retur</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/retur'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">Pengguna</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pengguna'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-clipboard"></i>
                  </div>
                  <div class="mr-5">Laporan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/laporan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>            
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-chart-area"></i>
                  </div>
                  <div class="mr-5">Grafik</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/grafik'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>            
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-user-cog fa-fw"></i>
                  </div>
                  <div class="mr-5">Logout</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'administrator/logout'?>">
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <?php }?>
<?php if($h=='2'){ ?> 
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Penjualan Eceran</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-cubes"></i>
                  </div>
                  <div class="mr-5">Penjualan Grosir</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/penjualan_grosir'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Pelanggan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pelanggan'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            </div>
            <?php }?>
    <?php if($h=='3'){ ?> 
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <strong>Selamat Datang <?php echo $this->session->userdata('nama');?> ! </strong> Semangat Bekerja.
          </ol>
          <!-- Icon Cards-->
                    <div class="row">
<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <div class="mr-5">Stock Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/barang'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-truck"></i>
                  </div>
                  <div class="mr-5">Suplier</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/suplier'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-sitemap"></i>
                  </div>
                  <div class="mr-5">Kategori</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/kategori'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Pembelian Barang</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/pembelian'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-tags"></i>
                  </div>
                  <div class="mr-5">Retur</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'admin/retur'?>">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>

          </div>
          <?php }?>
       <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright© 2021 <a href="http://bahyusanciko.xyz/" target="_blank">Abid Taufiqur Rohman</a></span>
            </div>
          </div>
        </footer>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url().'administrator/logout'?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/vendor/js/sb-admin.min.js'?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url().'assets/vendor/js/demo/datatables-demo.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/js/demo/chart-area-demo.js'?>"></script>

  </body>

</html>
 