<?php
/*
 * Template Name: Get a Demo
 * Description: Demo Page
 */


get_header(); ?>

<div class="container">
	<div class="row">
		<a class="demo-logo" href="/">Hypr</a>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col">
			<ul id="switch-content">
				<li id="one" class="switch-container">
					<h1 class="title">Schedule</h1>
					<h1>A Demo</h1>
					<?php echo do_shortcode('[showmodule id="1907"]'); ?>


				</li>

				<li id="experience" class="switch-container active enter">
					<a href="https://demo.hypr.com/bank/" target="blank" class="img-container">
						<img src="/wp-content/themes/hypr/assets/img/demo/highlands-demo-screenshot.png"/>
					</a>
				</li>

				
			</ul>
		</div>
	</div>

	
</div>

<div class="et_pb_section">
	<div class="et_pb_row et_pb_row_6">
		<div class="et_pb_column et_pb_column_1_3">
			<button id="one-btn" class="btn-demo">1 on 1</button>
		</div>
		<div class="et_pb_column et_pb_column_1_3 active">
			<button id="experience-btn" class="btn-demo">Experience</button>
		</div>
		<div class="et_pb_column et_pb_column_1_3 last">
			<a target="_blank" href="https://google.com" id="tour-btn" class="btn-demo">Tour</button>
		</div>
	</div>
</div>






<?php get_footer(); ?>
