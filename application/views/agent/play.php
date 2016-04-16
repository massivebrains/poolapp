<?php include 'tables-head.php' ?>
<body class="fixed-header" onload="start()">
	<?php include 'nav.php' ?>


	<div class="page-container ">

		<?php include 'header.php' ?>


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

					<?php include 'play-interface.php' ?>

				</div>

			</div>

			<?php include 'footer-note.php' ?>

		</div>

	</div>

	<?php include 'tables-footer.php' ?>