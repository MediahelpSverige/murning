<?php
/**
  * Template Name: service
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

            <?php $args = array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => 11);



              
              $query = new WP_Query( $args );

  

              while ($query->have_posts()) {
                $query->the_post();

                ?> 

                <a class="child-menu-btn" id="<?php echo $post->ID; ?>" > <?php the_title(); ?></a>


              <?php } 

                wp_reset_postdata();
              ?>

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

	    </section> <!-- /.content -->

      <div id="ajax-response"></div>

	    <?php endwhile; wp_reset_postdata(); ?>	  

            
      </div><!-- /.container -->
<?php get_footer(); ?> 