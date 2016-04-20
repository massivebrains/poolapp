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
					<img src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
				</div>
			</div>
		</div>

		
	</div>

	<div class=" pull-left sm-table hidden-xs hidden-sm">
		<div class="header-inner">
			<div class="brand inline">
				<img src="<?php echo base_url() ?>assets/assets/img/logo.png" alt="logo" data-src="<?php echo base_url() ?>assets/assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
			</div>

			<ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
				<li class="p-r-15 inline">
					<div class="dropdown">
						
						<a href="javascript:;" class="search-link" data-toggle="dropdown"><i class="pg-clock"></i>Notifications!</a>

						<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

							<div class="notification-panel">

								<div class="notification-body scrollable">

									<div class="notification-item unread clearfix">

										<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
											<a href="#" class="mark"></a>
										</div>

									</div>

									<div class="notification-item  clearfix">
										<div class="heading">
											<a href="#" class="text-warning-dark pull-left">
												<i class="fa fa-exclamation-triangle m-r-10"></i>
												<span class="bold">Warning Notification</span>
												<span class="fs-12 m-l-10">Buy Now</span>
											</a>
											<span class="pull-right time">yesterday</span>
										</div>

										<div class="option">
											<a href="#" class="mark"></a>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>
				</li>
				<li class="p-r-15 inline">
					<a href="#" class="icon-set clip "></a>
				</li>
				<li class="p-r-15 inline">
					<a href="#" class="icon-set grid-box"></a>
				</li>
			</ul>
			<label class="label label-danger"><i class="fa fa-tag"></i> Week 12</label>
			<li class="p-r-15 inline">
				<a href="#" class="icon-set clip "></a>
			</li>
		</div>
	</div>
	
	<div class=" pull-right">

		<div class="visible-lg visible-md m-t-10">
			<div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
				<span class="semi-bold">Agent</span> <span class="text-master">Segun</span>
			</div>
			<div class="dropdown pull-right">
				<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="thumbnail-wrapper d32 circular inline m-t-5">
						<img src="<?php echo base_url() ?>assets/assets/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url() ?>assets/assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
					</span>
				</button>
				<ul class="dropdown-menu profile-dropdown" role="menu">
					<li><a href="" data-target="#modalSlideLeft" data-toggle="modal"><i class="fs-14 sl-user"></i> Message Admin</a></li>
					<li class="bg-master-lighter">
						<a href="<?=site_url('auth/logout') ?>" class="clearfix">
							<span class="pull-left">Logout</span>
							<span class="pull-right"><i class="pg-power"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- mesage modal-->
<div class="modal fade slide-right" id="modalSlideLeft" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content-wrapper">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
				</button>
				<div class="container-xs-height full-height">
					<div class="row-xs-height">
						<div class="modal-body col-xs-height col-middle text-center">
						<h1>Message Administrator</h1>
							<form action="" method="get" accept-charset="utf-8">
								
								<div class="form-group">
								<label>Subject</label>
									<input type="text" name="subject" id="subject" class="form-control" style="border:1px solid #8A7DBE" required>
								</div>
								<div class="form-group">
								<label>Message</label>
									<textarea name="message" cols="5" rows="5" style="border:1px solid #8A7DBE" class="form-control"></textarea>
								</div>
								<button type="button" class="btn btn-primary btn-block">Send</button>
							</form>
							<br>
							<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
<!-- end of message modal -->