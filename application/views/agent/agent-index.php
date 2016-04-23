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

							<marquee behavior="alternate" direction="">All Agents are expected to submit 50liters of petrol to the programmer on or before his birthday. else they wont be able to play. MGNT.</marquee>

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