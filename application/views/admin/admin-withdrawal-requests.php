<?php include 'tables-head.php' ?>
<body class="fixed-header ">
	<?php include 'admin-nav.php' ?>


	<div class="page-container ">

		<?php include 'admin-header.php' ?>


		<div class="page-content-wrapper ">

			<div class="content ">

				<div class="jumbotron" data-pages="parallax">
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">

							<ul class="breadcrumb">
								<li><p>Dashboard</p></li>
								<li><a href="#">Withdrawals</a></li>
								<li><a href="#" class="active">Requests</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

					<!-- Table start -->
					<div class="conatiner">
						<div class="row">
							<div class="col-lg-12">
								
								<div class="clearfix"></div>

								<table class="table table-responsive" id="dataTable">
								<caption>Total: &#8358; <?php echo number_format(56630000) ?></caption>
									<thead>
										<tr>
											<td>DATE</td>
											<td>USER</td>
											<td>ACCOUNT BALANCE</td>
											<td>WITHDRAWAL REQUEST</td>
											<td>ACTION</td>
										</tr>

									</thead>
									<tbody>
										<?php for($i = 0; $i<=10; $i++){ ?>
										<tr>
											<td>Mon, 21 Nov, 2016</td>
											<td>Olaiya Segun</td>
											<td>&#8358; 6000</td>
											<td>&#8358; 1500</td>
											<td>
												<button class="btn btn-primary btn-sm " type="button">
													<i class="fs-14 sl-wallet"></i> 
													<span class="bold">Pay</span>
												</button>
											</td>
										</tr>
										<?php } ?>										
									</tbody>
								</table>
							</div>
							
						</div>
					</div>
					<!-- Table end -->

				</div>

			</div>

			<?php include 'footer-note.php' ?>

		</div>

	</div>

	<?php include 'tables-footer.php' ?>