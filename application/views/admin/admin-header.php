<div class="header ">

	<div class="container-fluid relative">

		<div class="pull-left full-height visible-sm visible-xs">

			<div class="header-inner">
				<a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
					<span class="icon-set menu-hambuger">
						<i class="fa fa-bars"></i>
					</span>
				</a>
			</div>

		</div>
		<div class="pull-center hidden-md hidden-lg">
			<div class="header-inner">
				<div class="brand inline">
					<img src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="<?php echo base_url() ?>assets/assets/img/logo_2x.png" width="78" height="22">
				</div>
			</div>
		</div>

		
	</div>

	<div class=" pull-left sm-table hidden-xs hidden-sm">
		<div class="header-inner">
			<div class="brand inline">
				<img src="assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="<?php echo base_url() ?>assets/assets/img/logo_2x.png" width="78" height="22">
			</div>
			<label class="label label-danger"><i class="fa fa-tag"></i> Week <?=$this->admin_game_model->get_current_week() ?></label>
			<li class="p-r-15 inline">
				<a href="#" class="icon-set clip "></a>
			</li>
			<span><?php echo $this->session->flashdata('message'); ?></span>
		</div>
	</div>
</div>
