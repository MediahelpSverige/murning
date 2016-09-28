<?php
/**
  * Template Name: Våra tjänster
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header();
?>
 <?php 
	  	  while(have_posts() ) : the_post(); ?>
  
  <section class="content vara-col">
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
<!--
            <div class="secB-vara">
                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. uis sed odio sit amet nibh vulputate cursus it amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
-->
             <div class="info-slider owl-carousel">
                 <?php
					if( have_rows('our_information') ): while ( have_rows('our_information') ) : the_row();
					if( get_row_layout() == 'information' ):
				?>
                <div class="item">
                    <div class="item-img">
                        <img src="<?php echo get_sub_field('image'); ?>" alt=""/>
                    </div>
                    <h3><?php echo get_sub_field("title"); ?></h3>
                </div>
                <?php
				       endif;
				   endwhile;
				endif;
				?>
            </div>
	    </section> <!-- /.content -->
	    <?php endwhile ;wp_reset_postdata(); ?>	  
      </div><!-- /.container -->
<?php get_footer(); ?> 