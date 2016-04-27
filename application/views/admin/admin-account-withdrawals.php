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
								<li><a href="#">Account</a></li>
								<li><a href="#" class="active">Withdrawals</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#credits"><span>Previous Withdrawals</span></a>
							</li>
							
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="credits">
								<!-- View winners Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="clearfix"></div>

											<table class="table" id="dataTable">
												<thead>
													<tr>
														<td>DATE</td>
														<td>USER</td>
														<td>PAYER</td>
														<td>AMOUNT</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($withdrawals as $row): ?>
													<tr>
														<td><?=$row->created ?></td>
														<td><?=strtoupper($this->ouser_model->get_username($row->ouser_id)) ?></td>
														<td><?=strtoupper($this->admin_model->get_name($row->admin_id)) ?></td>
														<td>&#8358; <span class="text-danger"><?=number_format($row->amount); ?></span></td>
													</tr>
													<?php endforeach; ?>										
												</tbody>
											</table>

										</div>

									</div>
								</div>
								<!-- Veiw winners Table end -->
							</div>
							
						</div>
					</div>



				</div>

			</div>

			<?php $this->load->view('includes/footer-note') ?>

		</div>

	</div>

	<?php $this->load->view('includes/tables-footer') ?>