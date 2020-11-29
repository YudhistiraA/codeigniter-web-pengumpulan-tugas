	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url()?>template/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>" >
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<?= $this->session->flashdata('message'); ?>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" id="email" name="email" placeholder="Type your email" value="<?= set_value('email'); ?>">
             <?= form_error('email', '<small class="text-danger pl-3">', '</small>' ); ?>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="password" name="password" placeholder="Type your password">
       <?= form_error('password', '<small class="text-danger pl-3">', '</small>' ); ?>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" value="login" class="login100-form-btn">
								Login
							</button>


						</div>
					</div>
					<div class="text-center">
						<a class="small" href="<?= base_url('auth/registration')?>">Create an Account!</a>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
