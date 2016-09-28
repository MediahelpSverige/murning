<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="information error_page">
	<h2 class="main-heading"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h2>
	<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
	<?php get_search_form(); ?>
</div><!-- .page-content -->
		
<?php get_footer(); ?>
