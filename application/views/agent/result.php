<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
	<meta charset="utf-8"/>
	<title>TACTIC-FIXED - RESULTS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
	<link href="<?php echo base_url() ?>assets/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link class="main-stylesheet" href="<?php echo base_url() ?>assets/pages/css/pages.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url() ?>assets/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
</head>
<?php //var_dump($results); ?>
<body class="fixed-header" onload="window.print()">
	<div class="page-container ">
		<div class="page-content-wrapper ">
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
			<a href="<?=site_url('agent/index') ?>">Back</a>
		</div>
	</div>
</body>
</html>