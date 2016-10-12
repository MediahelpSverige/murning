<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template. PAGGes
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php 
	  while(have_posts() ) : the_post(); ?>
  	  
 <div class="information default_pg">
 <?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
    <h2 class="main-heading"><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>
<?php endwhile; ?>	  
<?php get_footer(); ?>
