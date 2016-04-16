<?php include 'header.php' ?>
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Betting History</h1>
		
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
				<ul>
					<li><a href="user-account.php" title="">My Profile</a></li>
					<li><a href="user-played-coupons.php" title="">My Played Coupons</a></li>
					<li><a href="user-betting-history.php" title="">My Betting History</a></li>
					<li><a href="user-recharge.php" title="">Recharge</a></li>
					<li><a href="user-withdrawal.php" title="">Request Withdrawal</a></li>
					<li><a href="user-invite.php" title="">Invite Friends</a></li>
					<li><a href="contact.php" title="">Contact Us</a></li>
					<li><a href="index.php" title="">Logout</a></li>
				</ul>
			</div>

			<div class="col-sm-10 col-lg-10 col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Date</th>
									<th>Stake</th>
									<th>Status</th>
									<th>Amount Won</th>
								</tr>
							</thead>
							<tbody>
							<?php for($i = 1; $i<=10; $i++){ ?>
								<tr>
									<td>27-03-2016</td>
									<td>Won/Loss/Pending</td>
									<td>&#8358; 500</td>
									<td>&#8358; 5000</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
	<?php include 'footer.php' ?>