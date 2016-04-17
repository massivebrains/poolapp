<?php $this->load->view('includes/head') ?>
<body class="fixed-header dashboard">
	<?php $this->load->view('includes/nav') ?>
	<div class="page-container ">
		<?php $this->load->view('includes/header') ?>
		<div class="page-content-wrapper ">
			<div class="content sm-gutter">
				<div class="container-fluid padding-25 sm-padding-10">
					<?php $this->load->view('agent/index-content') ?>
				</div>
			</div>
			<?php $this->load->view('includes/footer-note') ?>
		</div>
	</div>
	<?php $this->load->view('includes/footer') ?>