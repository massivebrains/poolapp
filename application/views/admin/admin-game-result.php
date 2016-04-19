<?php $this->load->view('includes/tables-head') ?>
<body class="fixed-header" ng-app="app" ng-controller="gameCtrl" ng-init="startResult()" >
	<?php $this->load->view('admin/admin-nav') ?>


	<div class="page-container ">

		<?php $this->load->view('admin/admin-header') ?>


		<div class="page-content-wrapper ">

			<div class="content ">

				<div class="jumbotron" data-pages="parallax">
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">

							<ul class="breadcrumb">
								<li><p>Dashboard {{2+2}}</p></li>
								<li><a href="#" class="active">Game</a></li>
								<li><a href="#" class="active">Result</a></li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">


					<div class="panel">

						<ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
							<li class="active">
								<a data-toggle="tab" href="#branches"><span>Post Result</span></a>
							</li>
							
						</ul>

						<div class="tab-content">
							<div class="tab-pane slide-left active" id="branches">
								<!-- View Branches Table start -->
								<div class="conatiner">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<?php echo validation_errors(); ?>
											<div class="clearfix"></div>

											<?php //$this->load->view('admin/result-interface') ?>
											<div class="row">
												<form action="<?=site_url('admin/game/post_result') ?>" method="post" id="form">
													<div class="fomr-group">
														<label for="#">Input all winning numbers separated by commas eg 5,32,42,12</label><br>
														<input type="text" class="" name="result" required style="font-size:32px; padding:10px; border-radius:5px; border:1px solid #ababab; width:80%;">
													</div>
													<br />
													<div class="">
														<input ng-click="check($event)" class="btn btn-danger" name="submit" type="submit" value="SUBMIT!">
													</div>
													<?php  $csrf = array(
														'name' => $this->security->get_csrf_token_name(),
														'hash' => $this->security->get_csrf_hash());
														?>
														<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

													</form>
												</div>

											</div>

										</div>
									</div>
									<!-- Veiw Branches Table end -->
								</div>

							</div>

						</div>

					</div>
					<?php $this->load->view('includes/footer-note') ?>

				</div>

			</div>
			<?php if($this->session->flashdata('result') != ''): ?>
			<script>
				alert('<?php echo $this->session->flashdata('result') ?>');
			</script>
		<?php endif; ?>
			<?php $this->load->view('includes/tables-footer') ?>