<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-sm-center h-100">
			<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
					<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
				</div>
				<div class="card shadow-lg">
					<div class="card-body p-5">
						<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
						<?= $this->session->flashdata('message'); ?>
						<form method="POST" class="needs-validation" action="<?= base_url('auth'); ?>" novalidate=""
							autocomplete="off">
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" required autofocus>
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="mb-3">
								<div class="mb-2 w-100">
									<label class="text-muted" for="password">Password</label>
									<a href="forgot.html" class="float-end">
										Forgot Password?
									</a>
								</div>
								<input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="d-flex align-items-center">
								<div class="form-check">
									<input type="checkbox" name="remember" id="remember" class="form-check-input">
									<label for="remember" class="form-check-label">Remember Me</label>
								</div>
								<button type="submit" class="btn btn-primary ms-auto">
									Login
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							Don't have an account? <a href="<?= base_url('Auth/regis') ?>" class="text-dark">Register</a>
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