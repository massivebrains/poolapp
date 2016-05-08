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
							<li>
								<a data-toggle="tab" href="#settings"><span>Settings</span></a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="branches">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>

											<table class="table table-bordered" id="dataTable">
												<thead>
													<tr>
														<td>USER ID</td>
														<td>USER NAME</td>
														<td>USER EMAIL</td>
														<td>ACCOUNT BALANCE</td>
														<td>ACTION</td>
														<td>ACCOUNT</td>
													</tr>

												</thead>
												<tbody>
													<?php foreach($ousers as $row): ?>
														<tr>
															<td><?=$row->ouser_phone ?></td>
															<td><?=strtoupper($row->ouser_surname.' '.$row->ouser_firstname) ?></td>
															<td><?=$row->ouser_email ?></td>
															<td>&#8358; <?php echo number_format($this->admin_model->ouser_account_balance($row->ouser_id)); ?></td>
															<td>
																<?php if($row->status == 'active'){ ?>
																<a href="<?=site_url('admin/admin/suspend_ouser/'.$row->ouser_id) ?>" class="btn btn-danger btn-sm">
																	<i class="fs-14 pg-close"></i> 
																	<span class="bold">Suspend</span>
																</a>
																<?php }else{ ?>
																<a href="<?=site_url('admin/admin/activate_ouser/'.$row->ouser_id) ?>" class="btn btn-success btn-sm">
																	<i class="fs-14 pg-plus"></i> 
																	<span class="bold">Activate</span>
																</a>
																<?php } ?>

															</td>
															<td>
																<form action="<?=site_url('admin/admin/credit_user') ?>" method="post">
																	<input type="number" name="amount" class="form-control" placeholder="000" style="-moz-appearance:textfield" required>
																	<input type="hidden" name="ouser_id" value="<?=$row->ouser_id ?>">
																	<?php  $csrf = array(
																		'name' => $this->security->get_csrf_token_name(),
																		'hash' => $this->security->get_csrf_hash());
																		?>
																		<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
																		<input type="submit" name="submit" value="Credit" class="btn btn-danger btn-sm">
																	</form>
																</td>
															</tr>
														<?php endforeach; ?>										
													</tbody>
												</table>
											</div>

										</div>
									</div>
									<!-- Veiw Branches Table end -->
								</div>

								<div class="tab-pane slide-left" id="settings">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>
												<form action="<?=site_url('admin/admin/update_odd_type') ?>" method="post">
													<caption>Set Odd Type <small>(This Will take effect on the next coupon marking actions.)</small> <small class="text-danger">AS LONG AS THE COUPONS ARE NOT MARKED. THIS ODD TYPE CAN BE CHANGED.</small></caption>
													<input type="number" name="odd_type" class="form-control" placeholder="0"><br>
													<?php  $csrf = array(
																		'name' => $this->security->get_csrf_token_name(),
																		'hash' => $this->security->get_csrf_hash());
																		?>
																		<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
													<input type="submit" value="Submit" name="submit" class="btn btn-default">
												</form>
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