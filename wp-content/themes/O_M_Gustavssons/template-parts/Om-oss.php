<?php
/**
  * Template Name: Om oss
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header();
?>
 <?php while(have_posts() ) : the_post(); ?>
  <section class="content om-css">
            <div class="sec-heading">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="secA-om row">
<!--
                <div class="col-sm-4">
                    <div class="leftOmm">
                        <p>Lorem Ipsum. Proin gravida <a href="#">nibh vel velit auctor aliquetAei</a>lorem quis bibendum auctor, nisi eli consequaondimentum fermen</p>
                     </div>
                </div>
-->
                <div class="col-sm-10">
                    <div class="rightOmm">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="secB-om">
                <div class="about-detailsSlider owl-carousel"> 
                	<?php
					if( have_rows('om_oss_gallery') ): while ( have_rows('om_oss_gallery') ) : the_row();
					if( get_row_layout() == 'gallery_description' ):
				?>
                    <div class="item">
                        <div class="product-1">
                            <img src="<?php echo get_sub_field('image'); ?>" alt=""/>
                        </div>
                        <div class="product-details">
                            <h3><?php echo get_sub_field("title"); ?></h3>
                            <p><?php echo get_sub_field("content"); ?></p>
                        </div>
                    </div>
                <?php
				       endif;
				   endwhile;
				endif;
				?>
                </div>
            </div>
	    </section> <!-- /.content -->
 <?php endwhile ;wp_reset_postdata(); ?>	  
      </div><!-- /.container -->
<?php get_footer(); ?> 