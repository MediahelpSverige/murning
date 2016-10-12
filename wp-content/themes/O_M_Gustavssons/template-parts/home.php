<?php
/**
  * Template Name: front page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 get_header();
?>
<?php 
$address = get_theme_mod( 'address_area' ); 
$email = get_theme_mod( 'email' ); 
$telephone_no = get_theme_mod( 'primary_phone' ); 
?>
<section class="banner">
            <div class="banner-slider owl-carousel">
            <?php $args = array('post_type' => 'banner','posts_per_page' =>-1, 'order' => 'ASC');
	              $loop = new WP_Query( $args );
	              while ( $loop->have_posts() ) : $loop->the_post();?>
                <div class="item">
                    <img src="<?php $thumb_image=wp_get_attachment_url(get_post_thumbnail_id());  echo $thumb_image; ?>" alt=""/>
                    <div class="banner-caption">
                        <div class="banner-top">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="banner-bottom">
                             <a href="#"><?php echo get_the_content(); ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?> 
            </div>
        </section>
        <section class="content">
            <div class="kontakt-info clearfix">
                <div class="om-para">
                 <?php  $query_partner = new WP_Query('page_id=26');
	  	  				if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>

                    <h2 class="main-heading"><?php the_title(); ?></h2>
                    <p>
                        <span>
                            <?php echo get_the_content(); ?> 
                        </span>
                    </p>
                    <p><?php echo get_field("short_description"); ?> </p>
                 <?php endif;wp_reset_postdata(); ?>
                </div>
                <div class="kontact-info-col">
                <?php  $query_partner = new WP_Query('page_id=34');
	  	  				if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>
                    <h3><?php the_title(); ?></h3> <?php endif;wp_reset_postdata(); ?>
                   <ul class="kontact-list clearfix">
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png" alt=""/></span><div class="address"><?php echo $address; ?></div><div class="clearfix"></div></li>
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png" alt=""/></span>
                                <a href="mailto:info@o.m.gustavssonsmurning.com"><?php echo $email; ?></a><div class="clearfix"></div></li>
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt=""/></span><a href="tel:12345678"><?php echo $telephone_no; ?></a><div class="clearfix"></div></li>
                    </ul>
                </div>
            </div>
            <div class="information">
             <?php  $query_partner = new WP_Query('page_id=31');
	  	  				if( $query_partner->have_posts() ) : $query_partner->the_post(); ?>
                <h2 class="main-heading"><?php the_title(); ?></h2>
                 <?php the_content(); ?>
           
            </div>
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
                <?php endif;wp_reset_postdata(); ?>
            </div>
	    </section> <!-- /.content -->
      </div><!-- /.container -->
<?php get_footer(); ?> 