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
								<li><p>Dashboard</p></li>
								<li><a href="#">Account</a></li>
								<li><a href="#" class="active">Weekly Summary</a></li>
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
									<thead>
										<tr>
											<th>DATE</th>
											<th>WEEK NO</th>
											<th>TOTAL STAKE</th>
											<th>TOTAL WINNINGS</th>
											<th>TOTAL LOSS</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>
										<tr>
											<td>26 - 02 - 2016</td>
											<td>13</td>
											<td>&#8358; <?php echo number_format(200200) ?></td> 
											<td>&#8358; <?php echo number_format(3459000) ?></td> 
											<td>&#8358; <?php echo number_format(7009300) ?></td>
										</tr>										
									</tbody>
									<thead>
										<tr>
											<th>TOTAL</th>
											<th>&nbsp;</th>
											<th><strong>&#8358; <?php echo number_format(560000000) ?></strong></th>
											<th><strong>&#8358; <?php echo number_format(560000000) ?></strong></th>
											<th><strong>&#8358; <?php echo number_format(560000000) ?></strong></th>
										</tr>
									</thead>
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