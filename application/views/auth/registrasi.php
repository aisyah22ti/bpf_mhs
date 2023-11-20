<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
				</div>
				<div class="card shadow-lg">
					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">Make Account</h1>
						<form method="POST" class="needs-validation" novalidate=""
							action="<?= base_url('auth/regis'); ?>" autocomplete="off">
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Nama Lengkap</label>
								<input id="nama" type="text" class="form-control" name="nama"
									value="<?= set_value('nama'); ?>">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail</label>
								<input id="email" type="email" class="form-control" name="email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
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