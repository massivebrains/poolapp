<?php include 'header.php' ?>
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
		<section class="container">
			<table class="table table-bordered">
				<caption>Week 12 Result</caption>
				<thead>
					<tr>
						<th>Number</th>
						<th>Home</th>
						<th>Away</th>
						<th>Result</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				<?php for($i = 1; $i<=49; $i++){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>Chelsea</td>
						<td>Aston Villa</td>
						<td><span class="label label-success">Draw</span></td>
						<td><strong>FT</strong></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
	<?php include 'footer.php' ?>