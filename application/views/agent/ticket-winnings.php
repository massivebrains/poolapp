<?php include 'tables-head.php' ?>
<body class="fixed-header ">
	<?php include 'nav.php' ?>


	<div class="page-container ">

		<?php include 'header.php' ?>


		<div class="page-content-wrapper ">

			<div class="content ">

				<div class="jumbotron" data-pages="parallax">
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">

							<ul class="breadcrumb">
								<li>
									<p>Dashboard</p>
								</li>
								<li><a href="#">Coupon Tickets</a>
								</li>
								<li><a href="#" class="active">Winnings</a>
								</li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

					<!-- Table start -->
					<div class="conatiner">
						<div class="row">
							<div class="col-lg-12">
								<div class="pull-right">
									<div class="col-xs-12">
										<input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
									</div>
								</div>
								<div class="clearfix"></div>

								<table class="table demo-table-search table-responsive" id="tableWithSearch">
									<thead>
										<tr>
											<th>WEEK NO.</th>
											<th>COUPON NO</th>
											<th>AMOUNT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
										<tr>
											<td>6</td>
											<td>154673</td>
											<td>&#8358; <?php echo number_format(200200) ?></td>
										</tr>
																			
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