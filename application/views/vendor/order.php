<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('catering') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('vendor/prosesorder_v') ?>" method="POST">
                        <table class="table">
                            <tr>
                                <td width=20%>Tanggal</td>
                                <td>
                                    <input type="date" name="waktu_pesan_v" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Vendor</td>
                                <td><select name="nama_v" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($vendor as $x) { ?>
                                            <option value="<?= $x->nama_vendor ?>"><?= $x->nama_vendor ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Shift</td>
                                <td>
                                    <select name="shift_v" class="form-control">
                                        <option value=" 1">Satu - 1</option>
                                        <option value="2">Dua - 2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td><select name="lokasi_v" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($lokasi as $x) { ?>
                                            <option value="<?= $x->nama_lokasi ?>"><?= $x->nama_lokasi ?></option>
                                        <?php } ?>
                                    </select></td>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td> <input type="text" name="jumlah_v" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td> <input type="text" name="keterangan_v" class="form-control"></td>
                            </tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>