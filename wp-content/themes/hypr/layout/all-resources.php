<?php
/*
 * Template Name: All Resources
 * Description: All Resources Page
 */


get_header(); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


<div class="container loops">



	
		
	
		<a class="back-btn" href="/resources/">< Back</a>
		<?php echo do_shortcode( '[searchandfilter id="1920" show="results"]' ); ?>
	

	

	
</div>






<?php get_footer(); ?>
