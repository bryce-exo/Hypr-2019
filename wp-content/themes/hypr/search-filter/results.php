<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      http://www.designsandcode.com/
 * @copyright 2015 Designs & Code
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>
	
	
	
	<div class="row pagination">
		<h2>Found <?php echo $query->found_posts; ?> Results</h2>
		
		
	</div>
	<div class="row cards">
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		
		?>
		<div class="card-container">
					<div class="card">
					
					<div class="card-body">
						
						<h6><?php echo get_the_date( 'F j, Y' ); ?></h6>
						<h3 class="card-title"><?php the_title(); ?></h3>
						
						
						<span class="cta">Read</span>
					</div>

					</div>
					</div>
		<?php
	}
	?>
	

	</div>
	
	<div class="row pagination">
		
		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>