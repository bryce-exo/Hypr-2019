<?php
/*
 * Template Name: Resources
 * Description: Resources Page
 */


get_header(); 
	
   		  
   		
   		


?>



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
		<?php echo do_shortcode( '[searchandfilter slug="resources"]' ); ?>
	</div>
	</div>
</div>




<div class="container tag-whitepapers loops">
	
	<?php
		echo $_sft_resource_folder;
	?>
	<div class="row cards">
			<?php echo do_shortcode( '[searchandfilter slug="resources" show="results"]' ); ?>


	</div>
	
</div>

















<?php get_footer(); ?>
