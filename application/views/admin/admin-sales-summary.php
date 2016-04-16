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
								<li><a href="#">Sales</a></li>
								<li><a href="#" class="active">Summary</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#agents"><span>Agents</span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#ousers"><span>Online Users</span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#general"><span>Net Summary</span></a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="agents">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="clearfix"></div>

											<table class="table" id="dataTable">
												<thead>
													<tr>
														<td>DATE</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>Monday 12th, July</td>
														<td><?php echo $i; ?></td>
														<td>&#8358; <?php echo number_format(67000); ?></td>
														<td>&#8358; <?php echo number_format(348000); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
													</tr>
													<?php } ?>										
												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Veiw winners Table end -->
							</div>
							<div class="tab-pane slide-left active" id="ousers">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
										
											<div class="clearfix"></div>

											<table class="table" id="dataTable-2">
												<thead>
													<tr>
														<td>DATE</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>Monday 12th, July</td>
														<td><?php echo $i; ?></td>
														<td>&#8358; <?php echo number_format(67000); ?></td>
														<td>&#8358; <?php echo number_format(348000); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
													</tr>
													<?php } ?>										
												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Veiw Branches Table end -->
							</div>

							<div class="tab-pane slide-left active" id="general">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
										
											<div class="clearfix"></div>

											<table class="table" id="dataTable-3">
												<thead>
													<tr>
														<td>DATE</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>Monday 12th, July</td>
														<td><?php echo $i; ?></td>
														<td>&#8358; <?php echo number_format(67000); ?></td>
														<td>&#8358; <?php echo number_format(348000); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
														<td>&#8358; <?php echo number_format(457600); ?></td>
													</tr>
													<?php } ?>										
												</tbody>
											</table>
											
										</div>

									</div>
								</div>
								<!-- Veiw Branches Table end -->
							</div>


						</div>
					</div>



				</div>

			</div>

			<?php include 'footer-note.php' ?>

		</div>

	</div>

	<?php include 'tables-footer.php' ?>