<?php //var_dump($agents); ?>
<?php //var_dump($branches) ?>
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
								<li><a href="#" class="active">Agents</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">
						<?php echo validation_errors(); ?>
						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#agents"><span>Agents</span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#add"><span>Add New</span></a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="agents">
								<!-- View agents Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>

											<table class="table table-bordered " id="dataTable">
												<thead>
													<tr>
														<td>S/NO</td>
														<td>AGENT ID</td>
														<td>AGENT NAME</td>
														<td>AGENT BRANCH</td>
														<td>ACCOUNT BALANCE</td>
														<td>ACTION</td>
													</tr>

												</thead>
												<tbody>

													<?php $count = 1; ?>
													<?php if (!empty($agents)): ?>
														<?php foreach ($agents as $row): ?>
															<tr>
																<td><?=$count++; ?></td>
																<td><?=$row->agent_phone; ?></td>
																<td><?=$row->agent_name;?></td>
																<td><?=$this->admin_branch_model->branch_field($row->branch_id, 'branch_name'); ?></td>
																<td>&#8358; 0000000<?php //echo number_format(5600000); ?></td>
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
														<?php endforeach; ?>
													<?php endif; ?>										
												</tbody>
											</table>
										</div>

									</div>
								</div>
								<!-- Veiw agents Table end -->
							</div>
							<div class="tab-pane slide-left" id="add">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6">

										<form role="form" action="<?=site_url('admin/agent/create') ?>" method="post">
											<div class="form-group">
												<label>Agent Name</label>
												<span class="help">e.g. John Doe</span>
												<input type="text" name="agent_name" class="form-control" required>
											</div>

											<div class="form-group">
												<label>Agent Address</label>
												<textarea name="agent_address" cols="4" rows="4" class="form-control" required></textarea>
											</div>
											<div class="form-group">
												<label>Agent Phone</label>
												<span class="help">e.g. 08000000000</span>
												<input type="text" name="agent_phone" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Agent Password</label>
												<input type="text" name="agent_password" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Select Branch</label>
												<span class="help">e.g. Lagos</span>
												<select type="text" name="branch_id" class="form-control" required>
													<option value="">Select</option>
													<?php  foreach ($this->admin_branch_model->index() as $row): ?>
													<option value="<?=$row->branch_id ?>"><?=$row->branch_name; ?></option>
												<?php endforeach; ?>
											</select>
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