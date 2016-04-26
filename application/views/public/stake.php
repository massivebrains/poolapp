<?php //var_dump($games); ?>
<?php $this->load->view('public/header') ?>
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Result</h1>
		
	</div>
	</section>
	<div class="wrapsemibox"> 
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ABOUT
================================================== -->
		<section class="container" ng-app="app" ng-controller="ouserCtrl" ng-init="start()">
		<div class="col-sm-4 col-md-4 col-lg-4">
			<table class="table table-bordered" style="font-size:12px; padding:0;">
				<h3>Week <?=$week_number ?> Game</h3>
				<thead>
					<tr>
						<th>Number</th>
						<th>Match</th>
						<th>Choose</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($games as $row): ?>
					<tr>
						<td><?=$row->number; ?></td>
						<td><?=$row->home.' - '.$row->away ?></td>
						<td><input type="checkbox" id="<?=$row->number ?>" ng-click="select(<?=$row->number ?>)"></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<form action="#">
				<input type="text" ng-model="stake" class="form-control" id="stake" name="amount" placeholder="minimum is N100">
				<div class="">
						
						<input type="hidden" ng-model="odd" value="default">
				<input type="button" ng-click="reset($event)" value="RESET" class="btn btn-success btn-sm">
				<input type="submit" ng-click="submit($event)" id="submit" value="BET" class="btn btn-danger btn-sm">
			</form>
		</div>
			
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
<?php $this->load->view('public/footer') ?>