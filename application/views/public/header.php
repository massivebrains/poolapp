<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Tactic Fixed</title>
<link href="<?=base_url() ?>assets/public/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url() ?>assets/public/css/style.css" rel="stylesheet">
<link href="<?=base_url() ?>assets/public/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" id="main-color" href="<?=base_url() ?>assets/public/css/skin-red.css" media="screen"/>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/public/img/favicon.ico">
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="<?=base_url() ?>assets/public/css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">
	<!-- TOP AREA
================================================== -->
	<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft">
				<i class="icon-phone"></i> Phone: (234) 8175 020329 <span class="separator"></span><i class="icon-envelope"></i> Email: <a href="#">support@tacticfixed.com</a>
			</div>
			<div class="col-md-6 text-right animated fadeInRight">
				<div class="social-icons">
					<a class="icon icon-facebook" href="#"></a>
					<a class="icon icon-twitter" href="#"></a>
					<a class="icon icon-linkedin" href="#"></a>
					<a class="icon icon-skype" href="#"></a>
					<a class="icon icon-google-plus" href="#"></a>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /.toparea end-->
	<!-- NAV
================================================== -->
	<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand logo-nav" href="<?=site_url('public/index/view/index') ?>"><img src="<?php echo base_url() ?>assets/public/img/logo.png" alt="logo"></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
			<li class="active"><a href="<?=site_url('public/index/view/index') ?>">Home</a></li>
			<li><a href="<?=site_url('public/ouser/stake') ?>">Stake</a></li>
			<li><a href="<?=site_url('public/index/result') ?>">Results</a></li>
			<li><a href="<?=site_url('public/index/view/about') ?>">About</a></li>
			<?php if($this->session->user_id == ''){ ?>
			<li ><a href="<?=site_url('public/index/view/login') ?>" >Login/Register</a></li>
			<?php }else{ ?>
			<li ><a href="<?=site_url('public/ouser/index') ?>" >My Account</a></li>
			<?php } ?>
			<li><a href="<?=site_url('public/index/view/contact') ?>">Contact</a></li>
		</ul>		
	</div>	
	</nav>
	<!-- /nav end-->