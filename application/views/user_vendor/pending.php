<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Akun Vendor</h6>
        </div>
        <div class="card-body">
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
                                <td align="center">
                                    <?php if ($x->status_v == 2) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            Pending
                                        </div>
                                </td>
                            </tr>
                    <?php }
                                } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>