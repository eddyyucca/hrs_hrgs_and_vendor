<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('sarana') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8 col-md-6 mb-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="container">
                                    <table class="table">
                                        <tr>
                                            <td>Mitra</td>
                                            <td><?= $data->mitra; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Type</td>
                                            <td><?= $data->type; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Jenis</td>
                                            <td><?= $data->jenis; ?></td>
                                        </tr>

                                        <tr>
                                            <td>No Polisi</td>
                                            <td><?= $data->no_polisi; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Warna TNKB</td>
                                            <td><?= $data->warna_tnkb; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kondisi</td>
                                            <td><?= $data->kondisi; ?></td>
                                        </tr>

                                        <tr>
                                            <td>No Lambung</td>
                                            <td><?= $data->no_lambung; ?></td>
                                        </tr>

                                        <tr>
                                            <td>No PR</td>
                                            <td><?= $data->no_pr; ?></td>
                                        </tr>

                                        <tr>
                                            <td>No PO</td>
                                            <td><?= $data->no_po; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Awal Kontrak</td>
                                            <td><?= $data->awal_kontrak; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Akhir Kontrak</td>
                                            <td><?= $data->akhir_kontrak; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Masa Kontrak</td>
                                            <td><?= $data->masa_kontrak; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Selisih Hari</td>
                                            <td><?php
                                                //hitung selisih tanggal
                                                $sekarang = date('Y-m-d');
                                                $datesekarang = new DateTime($sekarang);
                                                $akhir = new DateTime($data->akhir_kontrak);
                                                $date = $datesekarang->diff($akhir);
                                                echo "$date->days hari ";

                                                $date_color = $date->days;

                                                if ($date_color < 60) { ?>
                                                    <button class="btn btn-danger"></button>
                                                <?php } elseif ($date_color > 30) { ?>
                                                    <button class="btn btn-primary"></button>

                                                <?php } ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Departemen</td>
                                            <td><?= $data->dept; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Harga Sewa Unit</td>
                                            <td><?= $data->harga_sewa_unit; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Jasa Driver</td>
                                            <td><?= $data->jasa_driver; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Shifr</td>
                                            <td><?= $data->shift; ?></td>
                                        </tr>

                                        <tr>
                                            <td>STNK Tahunan</td>
                                            <td><?= $data->stnk_tahunan; ?></td>
                                        </tr>

                                        <tr>
                                            <td>STNK Lima Tahun</td>
                                            <td><?= $data->stnk_lima_tahun; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Keterangan</td>
                                            <td><?= $data->ket; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Driver</td>
                                            <td><?php foreach ($driver as $x) {
                                                    echo $x->id_karyawan;
                                                    echo "->";
                                                    echo $x->nama_lengkap;
                                                    echo "<br>";
                                                } ?></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-4 col-md-6 mb-4 mt-4">
                    <div class="card">
                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="container">
                                        <table class="table">

                                            <tr>
                                                <td>
                                                    <label for="">Foto Depan</label>
                                                    <img <?php if ($data->foto_depan == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php } else { ?> src="<?= base_url('assets/foto/' . $data->foto_depan) ?>" <?php } ?> alt="Sarana" class="card-img-top" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label for="">Foto Belakang</label>
                                                    <img <?php if ($data->foto_depan == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php } else { ?> src="<?= base_url('assets/foto/' . $data->foto_belakang) ?>" <?php } ?> alt="Sarana" class="card-img-top" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label for="">Foto Kiri</label>
                                                    <img <?php if ($data->foto_depan == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php } else { ?> src="<?= base_url('assets/foto/' . $data->foto_kiri) ?>" <?php } ?> alt="Sarana" class="card-img-top" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label for="">Foto Kanan</label>
                                                    <img <?php if ($data->foto_depan == false) { ?> src="<?= base_url('assets/foto/default.png') ?>" <?php } else { ?> src="<?= base_url('assets/foto/' . $data->foto_kanan) ?>" <?php } ?> " alt=" Sarana" class="card-img-top" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>