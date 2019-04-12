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
						<?php echo do_shortcode('[showmodule id="1907"]'); ?>
						<small>HYPR may retain your contact information for future communications. For more information on our privacy practices, please review our Privacy Policy.</small>
						</div>
					</div>
				</li>

				<li id="experience" class="switch-container active enter">
					<iframe src="https://hyprstaging.wpengine.com" frameborder="0"></iframe>
				</li>



				<div class="subnav">
					<div class="wrap">
					<div class="row">
						<div class="col">
							<button id="one-btn" class="btn-demo">1 on 1</button>
						</div>
						
						<div class="col last">
							<a target="_blank" href="/technology/" id="tour-btn" class="btn-demo">Tour</a>
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
	<div class="row text-module">
		<div class="wrap">
		<h5>HOW WE'RE DIFFERENT</h5>
		<h1>Watch</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>

	<?php echo do_shortcode('[showmodule id="1911"]'); ?>
</div>



<?php echo do_shortcode('[showmodule id="392"]'); ?>




<?php get_footer(); ?>
