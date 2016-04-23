<?php //var_dump($tickets); ?>
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
								<li><a href="#">Coupon Tickets</a>
								</li>
								<li><a href="#" class="active">Winnings</a>
								</li>
							</ul>

						</div>
					</div>
				</div>


				<div class="container-fluid container-fixed-lg">

					<!-- Table start -->
					<div class="conatiner">
						<div class="row">
							<div class="col-lg-12">
								

								<table class="table table-bordered " id="dataTable">
									<thead>
										<tr>
											<th>WEEK NO</th>
											<th>COUPON CODE</th>
											<th>STAKE</th>
											<th>PLAY TIME</th>
											<th>AMOUNT WON</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($tickets as $row): ?>
											<tr>
												<td><?=$row->week_number ?></td>
												<td><?=$row->coupon_code ?></td>
												<td>&#8358; <?=$row->stake ?></td>
												<td><?=$row->play_time ?></td>
												<td>&#8358; <?= number_format($row->win_amount) ?></td>
											</tr>
										<?php endforeach; ?>

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