<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
	================================================== -->
	<section class="pageheader-default text-center">
		<div class="semitransparentbg">
			<h1 class="animated fadeInLeftBig notransition">Withdrawal</h1>
			
		</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ABOUT
		================================================== -->
		<section class="container">
			
			<div class="row">
				<?php $this->load->view('public/user-nav') ?>

				<div class="col-sm-10 col-lg-10 col-md-10">
					<div class="panel panel-default">
						<div class="panel-body">
							<?=validation_errors(); ?>
							<?=$this->session->flashdata('message'); ?>
							<form action="<?=site_url('public/ouser/post_withdrawal') ?>" method="POST" role="form">
								<legend>Request Withdrawal</legend>
								
								<div class="form-group">
									<label for="">Bank Name</label>
									<input type="text" class="form-control" id="" name="bank_name" required>
								</div>
								<div class="form-group">
									<label for="">Account Name </label>
									<input type="text" class="form-control" id="" name="account_name" required>
								</div>
								<div class="form-group">
									<label for="">Account Number</label>
									<input type="number" class="form-control" id="" name="account_number" required>
								</div>
								<div class="form-group">
									<label for="">Account Type</label>
									<select name="account_type" id="" class="form-control" required>
										<option value="">SELECT</option>
										<option value="savings">SAVINGS</option>
										<option value="current">CURRENT</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Amount</label>
									<input type="number" class="form-control" id="" name="amount" required>
								</div>
								<?php  $csrf = array(
									'name' => $this->security->get_csrf_token_name(),
									'hash' => $this->security->get_csrf_hash());
									?>
									<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
									
									
									<button type="submit" class="btn btn-primary btn-sm">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</section>
				
				
				<!-- /. end call to action-->
			</div>
			<!-- /.wrapsemibox end-->
			<?php $this->load->view('public/footer') ?>