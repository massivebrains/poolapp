<?php $this->load->view('includes/tables-head'); ?>
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
								<li><a href="#" class="active">Branches</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

					<div class="panel">
						<?php echo validation_errors(); ?>
						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active"> 
								<a data-toggle="tab" href="#branches"><span>Branches</span></a>
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

											<table class="table table-bordered" id="dataTable">
												<thead>
													<tr>
														<td>S/NO</td>
														<td>BRANCH NAME</td>
														<td>BRANCH ODD TYPE</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
												<?php $count = 1; ?>
													<?php if(!empty($branches)): ?>
														<?php foreach($branches as $row): ?>
															<tr>
																<td><?=$count++; ?></td>
																<td><?=$row->branch_name; ?></td>
																<td><?=$row->odd_type; ?></td>
																<td>
																<?php if($row->branch_status == 'active'){ ?>
																	<a href="<?=site_url('admin/branch/suspend/'.$row->branch_id) ?>" class="btn btn-danger btn-sm">
																		<i class="fs-14 pg-close"></i> 
																		<span class="bold">Suspend</span>
																	</a>
																<?php }else{ ?>
																<a href="<?=site_url('admin/branch/activate/'.$row->branch_id) ?>" class="btn btn-success btn-sm">
																		<i class="fs-14 pg-plus"></i> 
																		<span class="bold">Activate</span>
																	</a>
																	<?php } ?>
																</td>
															</tr>
														<?php endforeach; ?>
													<?php endif; ?>										
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
										
										<form role="form" action="<?php echo site_url('admin/branch/create') ?>" method="post">
											<div class="form-group">
												<label>Branch Name</label>
												<span class="help">e.g. Lagos</span>
												<input type="text" name="branch_name" class="form-control" required />
												<?php  $csrf = array(
												'name' => $this->security->get_csrf_token_name(),
												'hash' => $this->security->get_csrf_hash());
											 ?>
											<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
											</div>

											<div class="form-group">
												<label>Branch Odd Type</label>
												<span class="help">e.g. 70,30</span>
												<input type="text" name="odd_type" class="form-control" required />
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

			<?php $this->load->view('includes/footer-note') ?>

		</div>

	</div>

	<?php $this->load->view('includes/tables-footer') ?>