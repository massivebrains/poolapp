<section>
	<div class="footer">
		<div class="container animated fadeInUpNow notransition">
			<div class="row">
				<div class="col-md-3">
					<h1 class="footerbrand">Tactic</h1>
					<p>
						 Tactic Fixed, the first Nigerian website on football pools betting and indeed AFRICAN, 
					</p>
					<p>
						 is a service offered by Mars Leisure Limited to provide an exciting avenue for football pools stakers from any part of the world, 
					</p>
					<p>
						to take part in pools betting based on the weekly fixtures as published by the Pools Promoters Association in London.
					</p>
				</div>
				<div class="col-md-3">
					<h1 class="title"><span class="colortext">F</span>ind <span class="font100">Us</span></h1>
					<div class="footermap">
						<p>
							<strong>Address: </strong> No.42 - Gbagada Lagos
						</p>
						<p>
							<strong>Phone 1: </strong> 08175020329
						</p>
						<p>
							<strong>Phone 2: </strong> 09057174935
						</p>
						<p>
							<strong>Email: </strong> vadeshayo@gmail.com
						</p>
						<ul class="social-icons list-soc">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-google-plus"></i></a></li>
							<li><a href="#"><i class="icon-skype"></i></a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-6">
					<h1 class="title"><span class="colortext">Q</span>uick <span class="font100">Message</span></h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="#" id="contactform">
						<div class="form">
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<textarea class="col-md-12" name="comment" rows="4" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright tacticfixed.io
					</p>
				</div>
				<div class="col-md-8">
					<ul class="footermenu pull-right">
						<li><a href="#">Contact</a></li>
						<li><a href="#">Stack</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Results</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- /footer section end-->
</div>
<!-- /.wrapbox ends-->
<!-- SCRIPTS, placed at the end of the document so the pages load faster
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script>
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 295,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '200px',
		height: '295px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "",
        duration: 1200
    }
	});
		});
</script>
<script>
	//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
<script>
	//MASONRY
	$(document).ready(function(){
	var $container = $('#content');
	  $container.imagesLoaded( function(){
		$container.isotope({
		filter: '*',	
		animationOptions: {
		 duration: 750,
		 easing: 'linear',
		 queue: false,	 
	   }
	});
	});
	$('#filter a').click(function (event) {
		$('a.selected').removeClass('selected');
		var $this = $(this);
		$this.addClass('selected');
		var selector = $this.attr('data-filter');
		$container.isotope({
			 filter: selector
		});
		return false;
	});
	});
</script>
<script>
//ROLL ON HOVER
	$(function() {
	$(".roll").css("opacity","0");
	$(".roll").hover(function () {
	$(this).stop().animate({
	opacity: .8
	}, "slow");
	},
	function () {
	$(this).stop().animate({
	opacity: 0
	}, "slow");
	});
	});

	$(document).ready(function () {
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!--BEGIN DEMO PANEL
================================================== -->
<link rel="stylesheet" href="demo/css/style-switcher.css" media="screen"/>
<link rel="stylesheet" href="demo/css/colorpicker.css" media="screen"/>
<script type="text/javascript" src="demo/js/jquery.cookie.js"></script>
<script type="text/javascript" src="demo/js/styleswitch.js"></script>
<script type="text/javascript" src="demo/js/colorpicker.js"></script>
<script type="text/javascript" src="demo/js/switcher.js"></script>


<!--END DEMO PANEL
================================================== -->
</body>
</html>