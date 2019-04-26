<?php
/*
 * Template Name: Press
 * Description: Press
 */


get_header(); 
	
   		  
   		
   		


?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<div class="masthead">
	<div class="container">
		<div class="row">
			<h1 class="title">Press</h1>
		</div>

	</div>
	
	

	
</div>


<div class="container loops">
		<div class="row cards">
			<?php $loop = new WP_Query( array( 'category_name' => 'press_articles', 'posts_per_page' => -1, 'orderby'=>'date' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
			<div class="card-container">

				<?php if(get_field('url')!=''): ?>
					<a target="_blank" href="<?php the_field('url'); ?>">
				<?php endif; ?>

				<?php if(get_field('url')==''): ?>
					<a href="<?php the_permalink() ?>">
				<?php endif; ?>

			<div class="card">
				<div class="cover-container">
				<div class="cover" style="background-image:url('<?php 

								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
								echo $url ?>');">
									
								</div>
							</div>
			
			<div class="card-body">
				
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Read</span>
			</div>

			</div>
			</a>
			</div>

			
				
			
			
			
					
			<?php endwhile; ?>

			<?php else: ?>

			<?php endif; 
			wp_reset_postdata();?>
	</div>
	<div class="row">
		<span class="expand-btn">Show All +</span>
	</div>
</div>
















<?php get_footer(); ?>
