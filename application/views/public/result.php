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
		<section class="container">
			<div class="">
			<style type="text/css" media="all">
				#result{
					padding:5px;
					margin-top:20px;
				}

				#single{
					padding: 10px;
					font-size:15px;
					border: 1px solid #0a0a0a;
					border-radius:4px;
					box-shadow: 1px 1px 2px #0a0a0a;
					margin:3px;
					font-weight: bold;
					display: inline-table;
				}
			</style>

			<?php foreach($results as $row): ?>
				<div class="result">
				<h1>WEEK <?=$row->week_number ?> RESULT</h1>
					<?php $numbers = explode(',', $row->result); ?>
					<?php sort($numbers); ?>
					<?php foreach($numbers as $data=>$no): ?>
						<span id="single"><?=$no; ?></span>
					<?php endforeach; ?>

				</div>
			<?php endforeach; ?>
			<a href="<?=site_url('public/ouser/view') ?>">Back</a>
		</div>
		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
<?php $this->load->view('public/footer') ?>