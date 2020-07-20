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
										<a href="<?= base_url('auth/admin') ?>" class="btn btn-primary">ADMIN</a>
										<a href="<?= base_url('auth/user') ?>" class="btn btn-primary">USER</a>
										<a href="<?= base_url('auth/auth_vendor') ?>" class="btn btn-primary">Vendor</a>
										<a href="<?= base_url('auth/auth_pos') ?>" class="btn btn-primary">Pos</a>

									</div>
									<hr>
									<a href="<?= base_url('home_utama') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
