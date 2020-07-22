<div class="container col-6">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('vendor') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('vendor/proseseditvendor/') . $vendor->id_vendor ?>" method="POST" enctype="multipart/form-data" />
                    <table class="table">
                        <tr>
                            <td>Nama Vendor</td>
                            <td><input type="text" name="nama_vendor" value="<?= $vendor->nama_vendor ?>" class="form-control" placeholder="Nama Vendor"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" value="<?= $vendor->username_v ?>" class="form-control" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" value="<?= $vendor->password ?>" class="form-control" placeholder="Password"></td>
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