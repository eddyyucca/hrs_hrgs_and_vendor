<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Laporan Order</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <form action="<?= base_url('user_vendor/laporan_date') ?>" method="post">
                            <td>
                                <input type="date" class="form-control" name="date">
                            </td>
                            <button type="submit" class="btn btn-primary mt-3">Cari</button>
                        </form>
                    </div>
                </div>

                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Vendor</th>
                                <th>Shift</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Tanggal Post</th>
                                <th>Jumlah</th>
                                <th>Ket</th>
                                <th>laporan Pos</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($laporan_v as $x) { ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $x->nama_v; ?></td>
                                    <td><?= $x->shift_v; ?></td>
                                    <td><?= $x->lokasi_v; ?></td>
                                    <td><?= $x->waktu_pesan_v; ?></td>
                                    <td><?= $x->waktu_post_v; ?></td>
                                    <td><?= $x->jumlah_v; ?></td>
                                    <td><?= $x->keterangan_v; ?></td>
                                    <td><?= $x->keterangan_p; ?></td>
                                    <td align="center">
                                        <?php if ($x->status_v == 4) { ?>
                                            <div class="alert alert-secondary" role="alert">
                                                Diajukan
                                            </div>
                                        <?php } elseif ($x->status_v == 3) { ?>
                                            <div class="alert alert-primary" role="alert">
                                                Terkonfirmasi
                                            </div>
                                        <?php  } elseif ($x->status_v == 2) { ?>
                                            <div class="alert alert-warning" role="alert">
                                                Dikirim
                                            </div>
                                        <?php  } elseif ($x->status_v == 1) { ?>
                                            <div class="alert alert-success" role="alert">
                                                Selesai
                                            </div>
                                        <?php  } elseif ($x->status_v == 5) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                            </div>
                                    </td>
                                </tr>
                        <?php
                                        }
                                    } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>