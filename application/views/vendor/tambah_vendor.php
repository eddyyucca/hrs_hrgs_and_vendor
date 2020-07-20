<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('sarana') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('sarana/prosestambah') ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Mitra</td>
                            <td><input type="text" name="mitra" class="form-control" placeholder="Mitra"></td>
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