<?php //var_dump($coupons); ?>
<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Played Coupons</h1>
		
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
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Date</th>
									<th>Coupon Code</th>
									<th>Stake</th>
									<th>Game</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($coupons as $row): ?>
								<tr>
									<td><?=$row->play_time ?></td>
									<td><?=$row->coupon_code ?></td>
									<td>&#8358; <?=$row->stake ?></td>
									<td><?=$row->game ?></td>
									<td><?=$row->status ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
<?php $this->load->view('public/footer') ?>