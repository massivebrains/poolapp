<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
	================================================== -->
	<section class="pageheader-default text-center">
		<div class="semitransparentbg">
			<h1 class="animated fadeInLeftBig notransition">Login/Register</h1>

		</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ABOUT
		================================================== -->
		<section class="container">
			<?=validation_errors(); ?>
			<?=$this->session->flashdata('message'); ?>
			<div class="boxportfolio2 col-lg-6 col-sm-6">
				<h1 class="smalltitle">
					<span>Login to your account</span>
				</h1>
				<!-- Begin Form 1 -->
				<form class="form-horizontal" role="form" method="post" action="<?=site_url('auth/ouser_login') ?>">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" id="Phone Number" name="ouser_phone" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me </label>
								</div>
							</div>
						</div>
						<?php  $csrf = array(
							'name' => $this->security->get_csrf_token_name(),
							'hash' => $this->security->get_csrf_hash());
							?>
							<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" value="Sign In" class="btn btn-default">
								</div>
							</div>
						</form>
						<!-- End Form 1 -->
					</div>

					<div class="boxportfolio2 col-lg-6 col-sm-6">
						<h1 class="smalltitle">
							<span>Create new account</span>
						</h1>
						<!-- Begin Form 1 -->

						<form class="form-horizontal" role="form" method="post" action="<?=site_url('auth/ouser_create') ?>">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Surname</label>
								<div class="col-sm-10">
									<input type="text" id="surname"  name="ouser_surname" class="form-control" placeholder="Surname" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
								<div class="col-sm-10">
									<input type="text" id="firstname" name="ouser_firstname" class="form-control" placeholder="Firstname" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
								<div class="col-sm-10">
									<input type="text" id="phone number" name="ouser_phone" class="form-control" placeholder="0000000000" required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" id="phone number" name="ouser_email" class="form-control" placeholder="Email"required>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="password" name="password" placeholder="Password" requried>
								</div>
							</div>
							<?php  $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash());
								?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-success">Create</button>
									</div>
								</div>
							</form>
							<!-- End Form 1 -->
						</div>


					</section>


					<!-- /. end call to action-->
				</div>
				<!-- /.wrapsemibox end-->
				<?php $this->load->view('public/footer') ?>