<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Recharge</h1>
		
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
			<div class="col-sm-2 col-lg-2 col-md-2">
				<?php $this->load->view('public/user-nav') ?>
			</div>

			<div class="col-sm-10 col-lg-10 col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
					<p>
			After paying to the company's account, You can request for a recharge with the form below
		</p>
						<form action="" method="POST" role="form">
							<legend>Recharge</legend>
						
							<div class="form-group">
								<label for="">Teller Number</label>
								<input type="number" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Amount Paid</label>
								<input type="number" class="form-control" id="" >
							</div>
							<div class="form-group">
								<label for="">Date Paid</label>
								<input type="date" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Account Number</label>
								<input type="number" class="form-control" id="" value="vadeshayo@gmail.com">
							</div>
						
							
						
							<button type="submit" class="btn btn-primary btn-sm">Recharge</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
<?php $this->load->view('public/footer') ?>