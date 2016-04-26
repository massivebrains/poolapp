<?php //var_dump($user) ?>
<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
	================================================== -->
	<section class="pageheader-default text-center">
		<div class="semitransparentbg">
			<h1 class="animated fadeInLeftBig notransition"><?=strtoupper($user->ouser_surname.' '.$user->ouser_firstname); ?></h1>

		</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ABOUT
		================================================== -->
		<section class="container">
			<h5 class="pull-right">Balance: &#8358; <?php echo number_format($this->admin_model->ouser_account_balance($this->session->user_id)); ?></h5>
			<div class="row">
				<?php $this->load->view('public/user-nav') ?>

				<div class="col-sm-10 col-lg-10 col-md-10">
					<div class="panel panel-default">
						<div class="panel-body">
							<?=validation_errors(); ?>
							<?=$this->session->flashdata('message'); ?>
							<form method="POST" action="<?=site_url('public/ouser/edit/'.$this->session->user_id) ?>">
								<legend>Profile</legend>

								<div class="form-group">
									<label for="">Surname</label>
									<input type="text" class="form-control" id="" value="<?=strtoupper($user->ouser_surname); ?>" disabled>
								</div>
								<div class="form-group">
									<label for="">Firstname</label>
									<input type="text" class="form-control" id="" value="<?=strtoupper($user->ouser_firstname); ?>" disabled>
								</div>
								<div class="form-group">
									<label for="">Phone</label>
									<input type="text" name="ouser_phone"class="form-control" id="" value="<?=$user->ouser_phone ?>" required>
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" name="ouser_email" class="form-control" id="" value="<?=$user->ouser_email ?>" required>
								</div>
								<div class="form-group">
									<label for="">New Password</label>
									<input type="text" name="password" class="form-control" id="">
								</div>
								<?php  $csrf = array(
									'name' => $this->security->get_csrf_token_name(),
									'hash' => $this->security->get_csrf_hash());
									?>
									<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />



									<button type="submit" class="btn btn-primary btn-sm">Update</button>
								</form>
							</div>
						</div>
					</div>
				</section>


				<!-- /. end call to action-->
			</div>
			<!-- /.wrapsemibox end-->
			<?php $this->load->view('public/footer') ?>