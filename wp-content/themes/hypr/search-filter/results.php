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
		

		<h2><?php
			global $searchandfilter;
			$sf_current_query = $searchandfilter->get(16989)->current_query();
			


			$args = array(
					"str" 					=> '%2$s', 
					"delim" 				=> array(", ", " - "), 
					"field_delim"				=> ', ', 
					"show_all_if_empty"			=> false 
				);
				
				echo $sf_current_query->get_fields_html(
					array("_sft_resource_folder"), 
					$args
				);

		?></h2>




		


		
		
	</div>
	<div class="row cards">
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		
		?>
		<div class="card-container">
			<a href="<?php the_permalink() ?>">
					<div class="card">

					<div class="card-body">
						
						
						
						<?php
						$terms = get_the_terms( $post->ID , 'folder' );
						foreach ( $terms as $term ) {
						echo "<div class='cat ";
						echo $term->name;
						echo "'>";
						
						echo "</div>";
						}
						?>
						<h3 class="card-title"><?php the_title(); ?></h3>

						<h6 class="date"><?php echo get_the_date( 'F j, Y' ); ?></h6>
						
						<span class="cta">Read</span>
					</div>

					</div>
					</div>
				</a>
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
	echo "<div class='row'><h2>No Results Found</h2></row>";
}
?>