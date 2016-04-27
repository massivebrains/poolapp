<div class="row">
	<div class="col-md-3 col-lg-3 col-xlg-2 ">
		<div class="row">
			<div class="col-md-12 m-b-10">
				<div class="widget-8 panel no-border bg-info no-margin widget-loader-bar">
					<div class="container-xs-height full-height">
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="panel-heading top-left top-right">
									<div class="panel-title text-black hint-text">
										<span class="font-montserrat fs-11 all-caps text-white">Total Branches
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row-xs-height ">
							<div class="col-xs-height col-top relative">
								<div class="row">
									<div class="col-sm-6">
										<div class="p-l-20">
											<h3 class="no-margin p-b-5 text-white"><?=$this->admin_model->get_count('branches') ?></h3>
											<p class="small hint-text m-t-5">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
									</div>
								</div>
								<div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="success" data-stroke-width="2">
									<svg></svg>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 m-b-10">

				<div class="widget-9 panel no-border bg-info no-margin widget-loader-bar">
					<div class="container-xs-height full-height">
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="panel-heading  top-left top-right">
									<div class="panel-title text-black">
										<span class="font-montserrat fs-11 all-caps text-white">Total Admins
										</span>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="p-l-20 p-t-15">
									<h3 class="no-margin p-b-5 text-white"><?=$this->admin_model->get_count('admin') ?></h3>
								</a>
							</div>
						</div>
					</div>
					<div class="row-xs-height">
						<div class="col-xs-height col-bottom">
								<!-- <div class="progress progress-small m-b-20">
								
									<div class="progress-bar progress-bar-white" style="width:45%"></div>
								
								</div> -->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>

	&nbsp;
	<!--- Second coloumn of panels -->
	<div class="col-md-3 col-lg-3 col-xlg-2 ">
		<div class="row">
			<div class="col-md-12 m-b-10">

				<div class="widget-8 panel no-border bg-info no-margin widget-loader-bar">
					<div class="container-xs-height full-height">
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="panel-heading top-left top-right">
									<div class="panel-title text-black hint-text">
										<span class="font-montserrat fs-11 all-caps text-white">Total Agents
										</span>
									</div>
									
								</div>
							</div>
						</div>
						<div class="row-xs-height ">
							<div class="col-xs-height col-top relative">
								<div class="row">
									<div class="col-sm-6">
										<div class="p-l-20">
											<h3 class="no-margin p-b-5 text-white"><?=$this->admin_model->get_count('agents') ?></h3>
											<p class="small hint-text m-t-5">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
									</div>
								</div>
								<div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="success" data-stroke-width="2">
									<svg></svg>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12 m-b-10">

				<div class="widget-9 panel no-border bg-info no-margin widget-loader-bar">
					<div class="container-xs-height full-height">
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="panel-heading  top-left top-right">
									<div class="panel-title text-black">
										<span class="font-montserrat fs-11 all-caps text-white">Total Online users
										</span>
									</div>
									
								</div>
							</div>
						</div>
						<br>
						<div class="row-xs-height">
							<div class="col-xs-height col-top">
								<div class="p-l-20 p-t-15">
									<h1 class="no-margin p-b-5 text-white"><?=$this->admin_model->get_count('ousers') ?></h1>
								</a>
							</div>
						</div>
					</div>
					<div class="row-xs-height">
						<div class="col-xs-height col-bottom">
								<!-- <div class="progress progress-small m-b-20">
								
									<div class="progress-bar progress-bar-white" style="width:45%"></div>
								
								</div> -->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>
	<!-- end of second colomns of panels -->

	<div class="col-md-6 col-lg-6 m-b-10">

		<div class="widget-11-2 panel no-border panel-condensed no-margin widget-loader-circle">
			<div class="panel-heading top-right">
				<div class="panel-controls">
					<ul>
						<li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="padding-25">
				<div class="pull-left">
					<h5 class="text-danger no-margin">
						<strong>Top Withdrawal Requests</strong> <i class="fa fa-arrow-down"></i>
					</h5>
					<p class="no-margin">System Date: <?=date('F j, Y') ?></p>
				</div>
				<h4 class="pull-right semi-bold"><sup>
					<small class="semi-bold">Total: &#8358;</small>
				</sup> <?=number_format($withdrawal_sum); ?>
			</h4>
			<div class="clearfix"></div>
		</div>
		<div class="auto-overflow widget-11-2-table">
			<table class="table table-hover">
				<tbody>
					<thead>
						<tr>
							<td>DATE</td>
							<td>USER</td>
							<td>ACCOUNT BALANCE</td>
							<td>WITHDRAWAL REQUEST</td>
						</tr>

					</thead>
					<?php foreach($withdrawals as $row): ?>
					<tr>
						<td><?=$row->created; ?></td>
						<td><?=$this->ouser_model->get_username($row->ouser_id) ?></td>
						<td>&#8358;  <?php echo number_format($this->admin_model->ouser_account_balance($row->ouser_id)); ?></td>
						<td>&#8358; <span class="text-danger"><?=$row->amount ?></span></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="padding-25">
			<p class="small no-margin">
				<a href="<?=site_url('admin/admin/all_withdrawals') ?>">
					<i class="fa fs-16 fa-arrow-circle-o-left text-success m-r-10"></i>
					<span class="hint-text ">View all Withdrawal Requests</span>
				</a>
			</p>
		</div>
	</div>

</div>
</div>
