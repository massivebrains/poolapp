<?php include 'header.php' ?>
	<!-- PAGE TITLE
================================================== -->
	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Account</h1>
		
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- ABOUT
================================================== -->
		<section class="container">
		<div class="boxportfolio2 col-lg-6 col-sm-6">
				<h1 class="smalltitle">
				<span>Login to your account</span>
				</h1>
				<!-- Begin Form 1 -->
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" id="Phone Number" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
								<input type="checkbox"> Remember me </label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<a href="user-account.php" class="btn btn-default">Sign in</a>
						</div>
					</div>
				</form>
				<!-- End Form 1 -->
			</div>

			<div class="boxportfolio2 col-lg-6 col-sm-6">
				<h1 class="smalltitle">
				<span>Create new account</span>
				</h1>
				<!-- Begin Form 1 -->
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Surname</label>
						<div class="col-sm-10">
							<input type="text" id="surname" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" id="firstname" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" id="phone number" class="form-control" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Retype Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success">Create</button>
						</div>
					</div>
				</form>
				<!-- End Form 1 -->
			</div>


		</section>
		
	
		<!-- /. end call to action-->
	</div>
	<!-- /.wrapsemibox end-->
	<?php include 'footer.php' ?>