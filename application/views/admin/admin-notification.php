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
								<li><a href="#" class="active">Notifications</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Notifications</span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#add"><span>Add New</span></a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="branches">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="pull-right">
												<div class="col-xs-12">
													<input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
												</div>
											</div>
											<div class="clearfix"></div>

											<table class="table demo-table-search" id="tableWithSearch">
												<thead>
													<tr>
														<td>S/NO</td>
														<td>NOTIFICATION</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td><?php echo $i; ?></td>
														<td>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. 
														</td>
														<td>
															<a class="btn btn-danger btn-sm ">
																<i class="fs-14 pg-close"></i> 
																<span class="bold">Delete</span>
															</a>
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
							<div class="tab-pane slide-left" id="add">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										
										<form role="form">
											<div class="form-group">
												<label>New Notification</label>
												<textarea name="notification" cols="4" rows="4" class="form-control" required></textarea>
											</div>

											<div class="form-group">
												<input type="submit" name="submit" value="Submit" class="btn btn-primary">
											</div>
											
										</form>

									</div>
									<div class="col-md-3"></div>
								</div>
							</div>
						</div>
					</div>



				</div>

			</div>

			<?php include 'footer-note.php' ?>

		</div>

	</div>

	<?php include 'tables-footer.php' ?>