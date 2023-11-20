<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
				</div>
				<div class="card shadow-lg">

					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">FORM REGISTER</h1>
						<form method="POST" class="needs-validation" novalidate=""
							action="<?= base_url('Form/regis'); ?>" autocomplete="off">
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Nama Lengkap</label>
								<input id="nama" type="text" class="form-control" name="nama"
									value="<?= set_value('nama'); ?>">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Nama Panggilan</label>
								<input id="panggilan" type="text" class="form-control" name="panggilan"
									value="<?= set_value('panggilan'); ?>">
								<?= form_error('panggilan', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>

							<fieldset class="mb-3">
								<div class="row">
									<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
									<div class="col-sm-10">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jk" id="jk"
												value="Laki-Laki" checked>
											<label class="form-check-label" for="gridRadios1">
												Laki-Laki
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="jk" id="jk"
												value="Perempuan">
											<label class="form-check-label" for="jk">
												Perempuan
											</label>
										</div>
									</div>
								</div>
							</fieldset>

							<div class="mb-3">
								<label class="text-muted" for="password">Password</label>
								<input type="password" class="form-control" name="password">

								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mb-3">
								<label class="text-muted" for="password">Confirm Password</label>
								<input id="password2" type="password" class="form-control" name="password2">

							</div>

							<div class="d-flex align-items-center">

								<button type="submit" class="btn btn-primary ms-auto">
									Submit
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							Already have an account? <a href="<?= base_url('Auth/') ?>" class="text-dark">Login</a>
						</div>
					</div>
				</div>
				<div class="text-center mt-5 text-muted">
					Copyright &copy; 2017-2021 &mdash; Your Company
				</div>
			</div>
		</div>
	</div>
</section>