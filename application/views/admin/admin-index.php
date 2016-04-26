<?php //var_dump($withdrawals); ?>
<?php $this->load->view('includes/head') ?>
<body class="fixed-header dashboard">
	<?php $this->load->view('admin/admin-nav') ?>
	<div class="page-container ">
		<?php $this->load->view('admin/admin-header') ?>
		<div class="page-content-wrapper ">
			<div class="content sm-gutter">
				<div class="container-fluid padding-25 sm-padding-10">
					<?php echo validation_errors(); ?>
					<?php echo $this->session->flashdata('message'); ?>
					<?php $this->load->view('admin/admin-index-content') ?>
				</div>
			</div>
			<?php $this->load->view('includes/footer-note') ?>
		</div>
	</div>
	<?php $this->load->view('includes/footer') ?>