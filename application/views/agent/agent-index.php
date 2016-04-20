<?php $this->load->view('includes/tables-head') ?>
<body class="fixed-header" ng-app="app" ng-controller="gameCtrl" ng-init="start()">
<?php $this->load->view('agent/agent-nav') ?>


	<div class="page-container ">

<?php $this->load->view('includes/header') ?>


		<div class="page-content-wrapper ">

			<div class="content ">

				<div class="jumbotron" data-pages="parallax">
					<div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
						<div class="inner">

							<ul class="breadcrumb">
								<li>
									<p>Dashboard</p>
								</li>
								<li><a href="#" class="active">Playing Interface</a>
								</li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

				<?php $this->load->view('agent/play-interface') ?>

				</div>

			</div>

			<?php $this->load->view('includes/footer-note') ?>

		</div>

	</div>
<?php $this->load->view('includes/tables-footer') ?>