<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  Custom styles for this template -->
  <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- menu -->

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <?php if ($level_akun == "super_admin") { ?>
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dev') ?>">
          <?php } elseif ($level_akun == "admin" || "kepala_gs") { ?>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home') ?>">

            <?php } ?>

            <div class="sidebar-brand-icon">
              <img src="<?= base_url('assets/img/hrs.png'); ?>" width="50" height="50" alt="Logo PT.HRS">
            </div>
            <div class="sidebar-brand-text mx-3">PT. HRS</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
              Interface
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-database"></i>
                <span>Data</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('atk/view_data') ?>">ATK</a>
                  <a class="collapse-item" href="<?= base_url('sarana/index') ?>">SARANA</a>
                  <a class="collapse-item" href="<?= base_url('catering/index') ?>">CATERING</a>
                  <a class="collapse-item" href="<?= base_url('mess/index') ?>">MESS</a>
                  <a class="collapse-item" href="<?= base_url('seragam/index') ?>">SERAGAM</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vendor" aria-expanded="true" aria-controls="vendor">
                <i class="fas fa-utensils"></i>
                <span>Vendor Makanan</span>
              </a>
              <div id="vendor" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('vendor/akun_vendor') ?>">Akun Vendor</a>
                  <a class="collapse-item" href="<?= base_url('vendor/data_lokasi') ?>">Lokasi Pengantaran</a>
                  <a class="collapse-item" href="<?= base_url('order/laporan_departemen') ?>">Pesan Makanan</a>
                  <a class="collapse-item" href="<?= base_url('order/laporan_departemen') ?>">Laporan Makanan</a>
                </div>
              </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <?php if ($level_akun == "admin") { ?>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Order</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('order') ?>">Order Tunggu</a>

                  </div>
                </div>
              </li>
            <?php } elseif ($level_akun == "kepala_gs") { ?>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Order</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('kepala_gs/order_persetujuan') ?>">Order Persetujuan</a>
                    <a class="collapse-item" href="<?= base_url('order') ?>">Order Tunggu</a>

                  </div>
                </div>
              </li>

            <?php } ?>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                <i class="fas fa-table"></i>
                <span>Laporan Order ATK</span>
              </a>
              <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('order/laporan_bulanan') ?>">Laporan Order Bulanan</a>
                  <a class="collapse-item" href="<?= base_url('order/laporan_departemen') ?>">Laporan Departemen</a>
                  <a class="collapse-item" href="<?= base_url('order/order_selesai') ?>">Order Selesai</a>
                  <a class="collapse-item" href="<?= base_url('order/order_ditolak') ?>">Order Ditolak</a>
                </div>
              </div>
            </li>
            <!-- Divider -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <?php if ($level_akun == "admin") { ?>
                    <span class="badge badge-danger badge-counter"><?= count($alerts) ?></span>
                  <?php  } elseif ($level_akun == "kepala_gs") { ?>
                    <span class="badge badge-danger badge-counter"><?= count($alerts_3) ?></span>
                  <?php } ?>
                </a>
                <!-- Dropdown - Alerts -->
                <?php if ($level_akun == "admin") { ?>

                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                      Info
                    </h6>
                    <?php
                    $no = 1;
                    foreach ($alerts as $x) :
                      if ($no++ > 4) break;
                    ?>
                      <a class="dropdown-item d-flex align-items-center" href="<?= base_url('order/view/') . $x->id_ker ?>">
                        <div class="mr-3">
                          <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500"><?= $x->tanggal ?></div>
                          <span class="font-weight-bold"><?= $x->nama_dep ?></span>
                        </div>
                      </a>
                    <?php endforeach ?>
                    <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('order') ?>">Show All Alerts</a>
                  </div>

                <?php } elseif ($level_akun == "kepala_gs") { ?>

                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                      Info
                    </h6>
                    <?php
                    $no = 1;
                    foreach ($alerts_3 as $x) :
                      if ($no++ > 4) break;
                    ?>
                      <a class="dropdown-item d-flex align-items-center" href="<?= base_url('kepala_gs/view/') . $x->id_ker ?>">
                        <div class="mr-3">
                          <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500"><?= $x->tanggal ?></div>
                          <span class="font-weight-bold"><?= $x->nama_dep ?></span>
                        </div>
                      </a>
                    <?php endforeach ?>
                    <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('order') ?>">Show All Alerts</a>
                  </div>

                <?php } ?>


              </li>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $nama; ?></span>
                  <i class="fas fa-user-circle"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- end menu -->