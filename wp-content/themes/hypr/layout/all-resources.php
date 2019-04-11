<?php
/*
 * Template Name: All Resources
 * Description: All Resources Page
 */


get_header(); ?>

<div class="masthead">


	<div class="container">
		<div class="row">
			<h1 class="title">Resources</h1>
		</div>
	
	
	</div>
	
	

	
</div>

<div class="searchbox">
	<div class="container">
	<div class="row">
		<?php echo do_shortcode( '[searchandfilter id="1920"]' ); ?>
	</div>
	</div>
</div>


<div class="container">



	
	
	<div class="row">
		<?php echo do_shortcode( '[searchandfilter id="1920" show="results"]' ); ?>
	</div>

	

	
</div>






<?php get_footer(); ?>
