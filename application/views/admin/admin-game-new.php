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
								<li><a href="#" class="active">Game</a></li>
								<li><a href="#" class="active">New</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#new"><span>New Game</span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#game"><span>This Week Game</span></a>
							</li>
							
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="new">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="clearfix"></div>

											<table class="table">
												<thead>
													<tr>
														<td>NUMBER</td>
														<td>HOME</td>
														<td>AWAY</td>
														<td>DATE</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 1; $i<=49; $i++){ ?>
													<tr>
														<form role="form">
															<td><?php echo $i; ?></td>
															<td><input id="home" type="text" name="home" class="form-control" required></td>
															<td><input id="away" type="text" name="away" class="form-control" required></td>
															<td>
																<div class="input-daterange input-group" id="datepicker-range">
																	<input type="text" class="input-sm form-control" name="start"/>
																	<span class="input-group-addon">to</span>
																	<input type="text" class="input-sm form-control" name="end"/>
																</div>
															</td>
															<td><input id="sumit" type="submit" name="submit" value="Submit" onclick="confirm('Are you sure')" class="btn btn-sm btn-primary"></td>
														</form>
													</tr>
													<?php } ?>										
												</tbody>
											</table>
										</div>

									</div>
								</div>
								<!-- Veiw Branches Table end -->
							</div>

							<div class="tab-pane slide-left" id="game">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>

											<table class="table table-responsive">
												<thead>
													<tr>
														<td>NUMBER</td>
														<td>DEADLINE</td>
														<td>TOGGLE <small>(purple = open) &nbsp; (white = closed)</small></td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 1; $i<=49; $i++){ ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td>Mon 12, Jan 3:45pm</td>
														<td>
															<input type="checkbox" data-init-plugin="switchery" data-size="small" data-color="primary" checked="checked"/>
														</td>
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

				<?php include 'footer-note.php' ?>

			</div>

		</div>

		<?php include 'tables-footer.php' ?>