<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">

                                        <img src="<?= base_url('assets/img/hrs.png') ?>" width="100px">
                                        <hr>
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <?php if ($data == true) {
                                        echo  $data;
                                    } else {
                                    } ?>
                                    <?= validation_errors() ?>
                                    <form class="user" action="<?= base_url('auth/auth_user') ?>" method="POST">
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" name="id_kar" placeholder="ID Karyawan">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>
                                    <a href="<?= base_url('auth') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>