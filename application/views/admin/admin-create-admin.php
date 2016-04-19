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
								<li><a href="#" class="active">Admins</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

					<div class="panel">
						<?php echo validation_errors(); ?>
						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Admins</span></a>
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
														<td>ADMIN NAME</td>
														<td>ADMIN PHONE</td>
														<td>ADMIN EMAIL</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>
												<?php $count = 1; ?>
													<?php if(!empty($admins)): ?>
														<?php foreach($admins as $row): ?>
															<tr>
																<td><?=$count++; ?></td>
																<td><?=$row->admin_name; ?></td>
																<td><?=$row->admin_phone; ?></td>
																<td><?=$row->admin_email; ?></td>
																<td>
																	<button href="" class="btn btn-danger btn-sm" id="<?=$row->branch_id ?>" onclick="suspend(<?=$row->admin_id ?>)">
																		<i class="fs-14 pg-close"></i> 
																		<span class="bold">Suspend</span>
																	</button>
																</td>
															</tr>
														<?php endforeach; ?>
													<?php endif; ?>										
												</tbody>
											</table>
											<script>
													function suspend(id){
														if(confirm('Are you sure you want to suspend this admin?'))
														{
															var site_url = '<?php echo site_url() ?>';
															/*$.post(site_url+'/admin/branch/suspend', {branch_id:id}, function(data)
															{
																if(data == 1)
																{
																	alert('All agents from this branch are successfully suspended');
																	$('#'+id).prop('disabled', true);
																}
																else
																{
																	console.log(data);
																}
															});*/
														}
													}
											</script>
										</div>

									</div>
								</div>
								<!-- Veiw Branches Table end -->
							</div>
							<div class="tab-pane slide-left" id="add">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">
										
										<form role="form" action="<?php echo site_url('admin/admin/create') ?>" method="post">
											<div class="form-group">
												<label>Admin Name</label>
												<span class="help">e.g. John Doe</span>
												<input type="text" name="admin_name" class="form-control" required />
											</div>

											<div class="form-group">
												<label>Admin Phone</label>
												<span class="help">e.g. 08000000000</span>
												<input type="text" name="admin_phone" class="form-control" required />
											</div>

											<div class="form-group">
												<label>Admin Email</label>
												<span class="help">e.g. johndoe@domain.com</span>
												<input type="email" name="admin_email" class="form-control" required />
											</div>

											<div class="form-group">
												<label>Admin Password</label>
												<input type="password" name="admin_password" class="form-control" required />
											</div>

											<div class="form-group">
												<label>Retype Password</label>
												<input type="password" name="admin_password2" class="form-control" required />
											</div>
											<?php  $csrf = array(
												'name' => $this->security->get_csrf_token_name(),
												'hash' => $this->security->get_csrf_hash());
											 ?>
											<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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