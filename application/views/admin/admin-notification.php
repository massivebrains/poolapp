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
								<li><a href="#" class="active">Notifications</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Notification</span></a>
							</li>
							
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="branches">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											
											<div class="clearfix"></div>
											<?=$this->session->flashdata('message'); ?>
											<form role="form"change_notifcation method="post" action="<?=site_url('admin/admin/change_notifcation') ?>">
											<div class="form-group">
												<label>New Notification</label>
												<textarea cols="4" rows="4" class="form-control" required name="notification"></textarea>
												<?php  $csrf = array(
												'name' => $this->security->get_csrf_token_name(),
												'hash' => $this->security->get_csrf_hash());
											 ?>
											<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
											</div>

											<div class="form-group">
												<input type="submit" name="submit" value="Submit" class="btn btn-primary">
											</div>
											
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