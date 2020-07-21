<div class="container col-6">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('vendor') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('vendor/prosestambah_lokasi') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Nama Lokasi</td>
                            <td><input type="text" name="nama_lokasi" class="form-control" placeholder="Nama Lokasi"></td>
                        </tr>

                    </table>
                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>