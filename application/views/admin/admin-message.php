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
								<li><a href="#" class="active">Messages</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Messages</span></a>
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
														<td>AGENT NAME</td>
														<td>MESSAGE SUBJECT</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>OLAIYA SEGUN PAUL</td>
														<td>I need support over here!</td>
														<td>
															<div class="btn-sm  dropdown"> 
																<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"> Actions 
																	<span class="caret"></span>
																</a>
																<ul class="dropdown-menu">
																	<li><a href="#">View</a></li>
																	<li><a href="#">Delete</a></li>
																</ul>
															</div>
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
												<label>Branch Name</label>
												<span class="help">e.g. Lagos</span>
												<input type="text" name="branch-name" class="form-control" required>
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