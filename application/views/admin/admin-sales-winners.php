<?php //var_dump($awinners); ?>
<?php //var_dump($owinners); ?>
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
								<li><a href="#" class="active">Winners</a></li>
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
														<td>DATE</td>
														<td>WEEK NO</td>
														<td>AGENT NAME</td>
														<td>COUPON CODE</td>
														<td>STAKE</td>
														<td>AMOUNT WON</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($awinners as $row): ?>
													<tr>
														<td><?=$row->play_time; ?></td>
														<td><?=$row->week_number; ?></td>
														<td><?=$this->admin_agent_model->agent_field($row->player_id, 'agent_name') ?></td>
														<td><?=$row->coupon_code; ?></td>
														<td>&#8358; <?=number_format($row->stake); ?></td>
														<td>&#8358; <?=number_format($row->win_amount); ?></td>
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

											<table class="table" id="dataTable-2">
												<thead>
													<tr>
														<td>DATE</td>
														<td>WEEK NO</td>
														<td>USERNAME</td>
														<td>COUPON CODE</td>
														<td>STAKE</td>
														<td>AMOUNT WON</td>
													</tr>

												</thead>
												<tbody>
													<?php for($i = 0; $i<=10; $i++){ ?>
													<tr>
														<td>Tuesday 12th, July</td>
														<td><?php echo $i; ?></td>
														<td>OLAIYA SEGUN</td>
														<td>4584757</td>
														<td>&#8358; <?php echo number_format(540); ?></td>
														<td>&#8358; <?php echo number_format(5600000); ?></td>
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