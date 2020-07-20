<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('sarana') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>Dep</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_karyawan as $x) { ?>
                                    <td><?= $no++ ?></td>
                                    <td><?= $x->id_karyawan ?></td>
                                    <td><?= $x->nama_lengkap ?></td>
                                    <td><?= $x->nama_dep ?></td>
                                    <td><a href="<?= base_url("sarana/prosehapusdriver/") . $x->id_drive ?>" class="btn btn-danger">Hapus Driver</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>