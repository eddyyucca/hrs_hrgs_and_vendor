<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Menu
            </div>
            <div class="card-body">
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->


                    <!-- Earnings (Monthly) Card Example -->


                    <!-- Earnings (Monthly) Card Example -->


                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">MESS</div>
                                        <!-- membuat info habis kontrak -->
                                        <?php
                                        $no3 = 1;
                                        foreach ($data_mess as $x3) {
                                            $sekarang3 = date('Y-m-d');
                                            $datesekarang3 = new DateTime($sekarang3);
                                            $akhir3 = new DateTime($x3->akhir_kontrak);
                                            $date3 = $datesekarang3->diff($akhir3);
                                            $date_color3 = $date3->days;

                                            if ($date_color3 < "60") {
                                                $warna3 = "btn btn-danger";
                                                $no3++ > 1;
                                                break;
                                            } else {
                                                $warna3 = "btn btn-primary";
                                            }
                                        }
                                        ?>

                                        <!-- end -->
                                        <a href="<?= base_url('mess/index') ?>" class="<?= $warna3 ?>"><i class="fas fa-home fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-home fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <!-- Pending Requests Card Example -->

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Order Makanan</div>
                                        <a href="<?= base_url('order/order_makanan') ?>" class="btn btn-primary"> <i class="fas  fa-utensils fa-2x text-gray-300"></i></a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas  fa-utensils fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>