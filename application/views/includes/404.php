<?php include 'head.php' ?>
<body class="fixed-header error-page">
	<div class="container-xs-height full-height">
		<div class="row-xs-height">
			<div class="col-xs-height col-middle">
				<div class="error-container text-center">
					<h1 class="error-number">404</h1>
					<h2 class="semi-bold">Sorry but we couldnt find this page</h2>
					<p>This page you are looking for does not exsist <a href="#">Report this?</a>
					</p>
					<div class="error-container-innner text-center">
						<form>
							<div class="form-group form-group-default input-group transparent text-left">
								<label>Search</label>
								<input class="form-control" placeholder="Try searching the missing page" type="email">
								<span class="input-group-addon pg-search"></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-bottom sm-pull-bottom full-width">
		<div class="error-container">
			<div class="error-container-innner">
				<div class="m-b-30 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
					<div class="col-sm-3 no-padding">
						<img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
					</div>
					<div class="col-sm-9 no-padding">
						<p><small>Create a pages account. If you have a facebook account, log into it for this process.
							Sign in with <a href="#">Facebook</a> or <a href="#">Google</a></small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="overlay hide" data-pages="search">
		
		<div class="overlay-content has-results m-t-20">
			
			<div class="container-fluid">
				
				<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
				
				
				<a href="#" class="close-icon-light overlay-close text-black fs-16">
					<i class="pg-close"></i>
				</a>
				
			</div>
			
			<div class="container-fluid">
				
				<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
				<br>
				<div class="inline-block">
					<div class="checkbox right">
						<input id="checkboxn" type="checkbox" value="1" checked="checked">
						<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
					</div>
				</div>
				<div class="inline-block m-l-10">
					<p class="fs-13">Press enter to search</p>
				</div>
				
			</div>
			
			<div class="container-fluid">
				<span>
					<strong>suggestions :</strong>
				</span>
				<span id="overlay-suggestions"></span>
				<br>
				<div class="search-results m-t-40">
					<p class="bold">Pages Search Results</p>
					<div class="row">
						<div class="col-md-6">
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div>
										<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
									</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
									<p class="hint-text">via john smith</p>
								</div>
							</div>
							
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div>T</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
									<p class="hint-text">via pages</p>
								</div>
							</div>
							
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
									<div><i class="fa fa-headphones large-text "></i>
									</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
									<p class="hint-text">via pagesmix</p>
								</div>
							</div>
							
						</div>
						<div class="col-md-6">
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
									<div><i class="fa fa-facebook large-text "></i>
									</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
									<p class="hint-text">via facebook</p>
								</div>
							</div>
							
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
									<div><i class="fa fa-twitter large-text "></i>
									</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="hint-text">via twitter</p>
								</div>
							</div>
							
							
							<div class="">
								
								<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
									<div><i class="fa fa-google-plus large-text "></i>
									</div>
								</div>
								
								<div class="p-l-10 inline p-t-5">
									<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="hint-text">via google plus</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<?php include 'footer.php' ?>