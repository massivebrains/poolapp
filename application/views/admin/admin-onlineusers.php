<?php $this->load->view('includes/tables-head') ?>
<body class="fixed-header ">
<?php $this->load->view('admin/admin-nav') ?>


	<div class="page-container ">

	<?php $this->load->view('admin/admin-header') ?>


		<div class="page-content-wrapper ">

			<div class="content ">

				<div class="jumbotron" data-pages="parallax">
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">

							<ul class="breadcrumb">
								<li><p>Dashboard</p></li>
								<li><a href="#" class="active">Online Users</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Online Users</span></a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="branches">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>

											<table class="table" id="dataTable">
												<thead>
													<tr>
														<td>USER ID</td>
														<td>USER NAME</td>
														<td>ACCOUNT BALANCE</td>
														<td>ACTION</td>
														<td>ACCOUNT</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>09078543976</td>
														<td>OLAIYA SEGUN</td>
														<td>&#8358; <?php echo number_format(5600000); ?></td>
														<td>
															<div class="btn-sm  dropdown"> 
																<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> Actions 
																	<span class="caret"></span>&nbsp;
																</a>
																<ul class="dropdown-menu">
																	<li><a href="#">Suspend</a></li>
																	<li><a href="#">View History</a></li>
																	<li><a href="#">Deactivate</a></li>
																</ul>
															</div>&nbsp;

														</td>
														<td>
															<a class="btn btn-danger btn-sm ">
																<i class="fs-14 sl-wallet"></i> 
																<span class="bold">Credit Account</span>
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
						</div>
					</div>



				</div>

			</div>
			<?php $this->load->view('includes/footer-note') ?>

		</div>

	</div>
	<?php $this->load->view('includes/tables-footer') ?>