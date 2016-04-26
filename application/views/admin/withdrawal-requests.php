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
								<li><a href="#">Withdrawals</a></li>
								<li><a href="#" class="active">Requests</a></li>
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

								<table class="table table-responsive table-bordered" id="dataTable">
								<caption>Total: &#8358; <?php echo number_format(56630000) ?></caption>
									<thead>
										<tr>
											<th>DATE</th>
											<th>USER</th>
											<th>USER BALANCE</th>
											<th>BANK NAME</th>
											<th>ACCOUNT NAME</th>
											<th>ACCOUNT NUMBER</th>
											<th>ACCOUNT TYPE</th>
											<th>REQUEST AMOUNT</th>
											<th>ACTION</th>
										</tr>

									</thead>
									<tbody>
										<?php foreach($withdrawals as $row): ?>
										<tr>
											<td><?=$row->created ?></td>
											<td><?=strtoupper($this->ouser_model->get_username($row->ouser_id)) ?></td>
											<td>&#8358; 000</td>
											<td><?=strtoupper($row->bank_name) ?></td>
											<td><?=strtoupper($row->account_name) ?></td>
											<td><?=strtoupper($row->account_number) ?></td>
											<td><?=strtoupper($row->account_type) ?></td>
											<td>&#8358; <?=strtoupper($row->amount) ?></td>
											<td>
												<a class="btn btn-primary btn-sm " href="<?=site_url('admin/admin/pay_withdrawal/'.$row->id) ?>" >
													<i class="fs-14 sl-wallet"></i> 
													<span class="bold">Pay</span>
												</a>
											</td>
										</tr>
										<?php endforeach; ?>										
									</tbody>
								</table>
							</div>
							
						</div>
					</div>
					<!-- Table end -->

				</div>

			</div>

			<?php $this->load->view('includes/footer-note') ?>

		</div>

	</div>

	<?php $this->load->view('includes/tables-footer') ?>