<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js' lang='en'>
	<!--<![endif]-->
	<head>
		<meta charset='utf-8' />
		<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
		<title>Megah Alkesindo - Coming Soon</title>	
		
		
		
		<link rel="stylesheet" href="<?php echo base_url()?>assets/maintenance/css/maximage.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/maintenance/css/styles.css" type="text/css" media="screen" charset="utf-8" />
		
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<!--[if IE 6]>
			<style type="text/css" media="screen">
				.gradient {display:none;}
			</style>
		<![endif]-->
	</head>
	<body>

		<!-- Social Links -->
		<nav class="social-nav">
			<ul>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-facebook.png" /></a></li>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-twitter.png" /></a></li>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-google.png" /></a></li>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-dribbble.png" /></a></li>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-linkedin.png" /></a></li>
				<li><a href="#"><img src="<?php echo base_url()?>assets/maintenance/images/icon-pinterest.png" /></a></li>
			</ul>
		</nav>

		<!-- Switch to full screen -->
		<button class="full-screen" onclick="$(document).toggleFullScreen()"></button>

		<!-- Site Logo -->
		<div id="logo">megah</div>

		<!-- Main Navigation -->
		<nav class="main-nav">
			<ul>
				<li><a href="#home" class="active">Home</a></li>
				<li><a href="<?php echo base_url()?>produk">Back To Megah</a></li>
			</ul>
		</nav>

		<!-- Slider Controls -->
		<a href="" id="arrow_left"><img src="<?php echo base_url()?>assets/maintenance/images/arrow-left.png" alt="Slide Left" /></a>
		<a href="" id="arrow_right"><img src="<?php echo base_url()?>assets/maintenance/images/arrow-right.png" alt="Slide Right" /></a>

		<!-- Home Page -->
		<section class="content show" id="home">
			<h1>Page Is Under Maintenance</h1>
			<h5>Our new site is coming soon!</h5>
			<p>This page is currently under repair by the developer, hopefully you wait patiently. While waiting for the latest updates, we want to provide a build qoutes. <br><strong>Demanding knowledge is because someone gets hidayah. Hidayah is what leads someone to heaven.</strong></p>
			
		</section>

		<!-- About Page -->
		
		
		<!-- Background Slides -->
		<div id="maximage">
			<div>
				<img src="<?php echo base_url()?>assets/maintenance/images/backgrounds/bg-img-1.jpg" alt="" />
				<img class="gradient" src="<?php echo base_url()?>assets/maintenance/images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="<?php echo base_url()?>assets/maintenance/images/backgrounds/bg-img-2.jpg" alt="" />
				<img class="gradient" src="<?php echo base_url()?>assets/maintenance/images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="<?php echo base_url()?>assets/maintenance/images/backgrounds/bg-img-3.jpg" alt="" />
				<img class="gradient" src="<?php echo base_url()?>assets/maintenance/images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="<?php echo base_url()?>assets/maintenance/images/backgrounds/bg-img-4.jpg" alt="" />
				<img class="gradient" src="<?php echo base_url()?>assets/maintenance/images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="<?php echo base_url()?>assets/maintenance/images/backgrounds/bg-img-5.jpg" alt="" />
				<img class="gradient" src="<?php echo base_url()?>assets/maintenance/images/backgrounds/gradient.png" alt="" />
			</div>
		</div>
		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/jquery.fullscreen.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/jquery.ba-hashchange.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo base_url()?>assets/maintenance/js/main.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#maximage').maximage({
					cycleOptions: {
						fx: 'fade',
						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: 5000,
						prev: '#arrow_left',
						next: '#arrow_right',
						pause: 0,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						}
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage').fadeIn('fast');
					}
				});
	
				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');
	
			});
		</script>
  </body>
</html>
