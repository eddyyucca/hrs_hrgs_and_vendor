<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesanan'); ?>
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <table class="mt-2 ml-3">
                            <tr>
                                <td> Nama Vendor</td>
                                <td>: <?= $laporan_v->nama_v ?> </td>
                            </tr>
                            <tr>
                                <td> Shift</td>
                                <td>: <?= $laporan_v->shift_v ?> </td>
                            </tr>
                            <tr>
                                <td> Lokasi</td>
                                <td>: <?= $laporan_v->lokasi_v ?> </td>
                            </tr>
                            <tr>
                                <td> Tanggal Order </td>
                                <td>: <?= $laporan_v->waktu_pesan_v ?> </td>
                            </tr>

                            <tr>
                                <td> Tanggal Post </td>
                                <td>: <?= $laporan_v->waktu_post_v ?> </td>
                            </tr>
                            <tr>
                                <td> Keterangan </td>
                                <td>: <?= $laporan_v->keterangan_v ?> </td>
                            </tr>
                            <tr>
                                <td> Jumlah</td>
                                <td>: <?= $laporan_v->jumlah_v ?> </td>
                            </tr>

                            <form action="<?= base_url('pos/diterima_pos/') . $laporan_v->id_order_v ?>" method="post">
                                <tr>
                                    <td>Catatan Post</td>

                                    <td>
                                        <textarea name="keterangan_p" class="form-control" cols="30" rows="10"></textarea>

                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td> <button class="btn btn-primary">Simpan</button></td>
                                </tr>
                            </form>
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>