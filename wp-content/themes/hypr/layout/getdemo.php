<?php
/*
 * Template Name: Get a Demo
 * Description: Demo Page
 */


get_header(); ?>




<div class="masthead">

	<div class="row logo-container">
		<a class="demo-logo" href="/">Hypr</a>
	</div>
	<div class="row switch">
		<div class="col">
			<ul id="switch-content">
				<li id="one" class="switch-container">
					<div class="col-1">
						<div class="wrap">
						<h1>Schedule</h1>
						<h4>A Demo</h4>
						<p>	
							Schedule your 1-on-1 Demo with our team of experts and learn why the world’s largest companies choose HYPR to eliminate passwords.</p>
						</div>
					</div>
					<div class="col-2">
						<div class="wrap">
						<!--[if lte IE 8]>
						 <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
						 <![endif]-->
						 <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
						<script>
						 hbspt.forms.create({
						   portalId: '2670073',
						   formId: '7421469d-f91b-4319-aaa6-8997d3abad2d',
						   css: '',
						   
						 });
						</script>
						
						</div>
					</div>
				</li>

				<li id="experience" class="switch-container active enter">
					<a href="https://demo.hypr.com/bank/">
						
					</a>
				</li>



				<div class="subnav">
					<div class="wrap">
					<div class="row">
						<div class="col one">
							<button id="one-btn" class="btn-demo">1 on 1</button>
						</div>
						<div class="col experience active">
							<button id="experience-btn" class="btn-demo">Experience</button>
						</div>

						
						<div class="col last">
							<a href="/authentication-platform/" id="tour-btn" class="btn-demo">Tour</a>
						</div>
					</div>
					</div>
				</div>
			</ul>

			<div class="badges">
				<div class="wrap">
					<a class="apple-store" href="https://itunes.apple.com/us/app/hypr/id1343368858" style="background-image: url('https://dctfcu.com/wp-content/uploads/sites/63/2018/04/app-store-logo.png');"></a>
					<a class="play-store" href="http://play.google.com/store/apps/details?id=com.hypr.one" style="background-image: url('https://static-content.4tellus.com/wp-content/uploads/2018/05/23014710/badge-play.png');"></a>
				</div>
			</div>
		</div>
	</div>

	

	
</div>

<div class="container videos">
	

	<?php echo do_shortcode('[showmodule id="1911"]'); ?>
</div>



<?php echo do_shortcode('[showmodule id="392"]'); ?>




<?php get_footer(); ?>
