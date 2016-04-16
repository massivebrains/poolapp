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
								<li><a href="#" class="active">Agents</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Agents</span></a>
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
											
											<div class="clearfix"></div>

											<table class="table " id="dataTable">
												<thead>
													<tr>
														<td>AGENT ID</td>
														<td>AGENT NAME</td>
														<td>AGENT BRANCH</td>
														<td>ACCOUNT BALANCE</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>08175020329</td>
														<td>OLAIYA SEGUN</td>
														<td>LAGOS</td>
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
													<label>Agent Name</label>
													<span class="help">e.g. Lagos</span>
													<input type="text" name="agent-name" class="form-control" required>
												</div>

												<div class="form-group">
													<label>Agent Address</label>
													<span class="help">e.g. Lagos</span>
													<textarea name="agent-address" cols="4" rows="4" class="form-control" required></textarea>
												</div>
												<div class="form-group">
													<label>Agent Phone</label>
													<span class="help">e.g. Lagos</span>
													<input type="text" name="agent-phone" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Select Branch</label>
													<span class="help">e.g. Lagos</span>
													<select type="text" name="agent-phone" class="form-control" required>
													<option value="Lagos">Lagos</option>
													<option value="Lagos">Lagos</option>
													<option value="Lagos">Lagos</option>
													option
													</select>
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