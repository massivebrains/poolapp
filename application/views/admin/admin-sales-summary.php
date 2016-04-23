<?php //var_dump($agent) ?>
<?php //var_dump($ouser) ?>
<?php //var_dump($summary) ?>
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

											<table class="table table-bordered" id="dataTable">
												<thead>
													<tr>
														<td>WEEK END</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($agent as $row): ?>
													<tr>
														<td><?=$row['week_end'] ?></td>
														<td><?=number_format($row['week_number']) ?></td>
														<td>&#8358; <?=number_format($row['total_stake']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_won']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_lost']) ?></td>
														<td>&#8358; <?=number_format(($row['total_amount_won'] - $row['total_amount_lost'])) ?></td>
													</tr>
													<?php endforeach; ?>										
												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Veiw winners Table end -->
							</div>
							<div class="tab-pane slide-left" id="ousers">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
										
											<div class="clearfix"></div>

											<table class="table table-bordered" id="dataTable-2">
												<thead>
													<tr>
														<td>WEEK END</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($ouser as $row): ?>
													<tr>
														<td><?=$row['week_end'] ?></td>
														<td><?=number_format($row['week_number']) ?></td>
														<td>&#8358; <?=number_format($row['total_stake']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_won']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_lost']) ?></td>
														<td>&#8358; <?=number_format(($row['total_amount_won'] - $row['total_amount_lost'])) ?></td>
													</tr>
													<?php endforeach; ?>											
												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Veiw Branches Table end -->
							</div>

							<div class="tab-pane slide-left" id="general">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
										
											<div class="clearfix"></div>

											<table class="table table-bordered" id="dataTable-3">
												<thead>
													<tr>
														<td>WEEK END</td>
														<td>WEEK NO</td>
														<td>TOTAL STAKE</td>
														<td>TOTAL AMOUNT WON</td>
														<td>TOTAL AMOUNT LOST</td>
														<td>NET DIFF</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($summary as $row): ?>
													<tr>
														<td><?=$row['week_end'] ?></td>
														<td><?=number_format($row['week_number']) ?></td>
														<td>&#8358; <?=number_format($row['total_stake']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_won']) ?></td>
														<td>&#8358; <?=number_format($row['total_amount_lost']) ?></td>
														<td>&#8358; <?=number_format(($row['total_amount_won'] - $row['total_amount_lost'])) ?></td>
													</tr>
													<?php endforeach; ?>											
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
