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
	
	<div class="row">
		<h2>White Papers</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'white-papers', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<a href="<?php the_permalink() ?>"><div class="card">
				
			
				<div class="card-body">
					
					<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
					<h3 class="card-title"><?php the_title(); ?></h3>
					
					
					<span class="cta">Read White Paper</span>
				</div>
				
			</div></a>
			


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

<hr>
<div class="container tag-usecases loops">
	<div class="row">
		<h2>Use Cases</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'use-cases', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<div class="card">
			
			<div class="card-body">
				
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Read Use Case</span>
			</div>

			</div>
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
<hr>

<div class="container tag-datasheets loops">
	<div class="row">
		<h2>Data Sheets</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'data-sheets', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<div class="card">
			
			<div class="card-body">
				
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Read Data Sheet</span>
			</div>

			</div>
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

<hr>
<div class="container tag-videos loops">
	<div class="row">
		<h2>Videos</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'videos', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<div class="card">
			
			<div class="card-body">
				
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Watch Video</span>
			</div>

			</div>
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
<hr>
<div class="container tag-successstories loops">
	<div class="row">
		<h2>Success Stories</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'success-stories', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<div class="card">
			
			<div class="card-body">
				<?php the_tags( '', ', ', '<br />' ); ?>
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Read Success Story</span>
			</div>

			</div>
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

<hr>
<div class="container tag-capabilities loops">
	<div class="row">
		<h2>Capabilities</h2>
	</div>
	<div class="row cards">
			<?php $loop = new WP_Query( array( 'tag' => 'capabilities', 'numberposts' => 0,'orderby'=>'title' ) );
			if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="card-container">
			<div class="card">
			
			<div class="card-body">
				
				<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
				<h3 class="card-title"><?php the_title(); ?></h3>
				
				
				<span class="cta">Read Capabilities</span>
			</div>

			</div>
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
