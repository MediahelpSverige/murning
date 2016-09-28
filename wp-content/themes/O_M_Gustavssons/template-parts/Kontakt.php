<?php
/**
  * Template Name: Kontakt
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
 <?php while(have_posts() ) : the_post(); ?>
    <section class="content om-css">
            <div class="sec-heading">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="contact clearfix">
                <div class="contact-right">
                    <?php the_content(); ?>
                           <?php echo do_shortcode('[contact-form-7 id="88" title="kontakt form"]'); ?>
                      </div>
                    <div class="kontact-info-col">
                        <h3><?php echo get_field("kontakt_information") ?></h3>
                        <ul class="kontact-list clearfix">
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png" alt=""/></span><div class="address"><?php echo $address; ?></div></li>
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png" alt=""/></span>
                                <a href="mailto:info@o.m.gustavssonsmurning.com"><?php echo $email; ?></a></li>
                            <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt=""/></span><a href="tel:12345678"><?php echo $telephone_no; ?></a></li>
                        </ul>
                  </div>
            </div>
            <div class="map-col">
                <?php echo get_field("map_title") ?>
                <div class="map">
                     <!--<iframe style="border:0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14739.552502792629!2d88.34820925!3d22.545863200000003!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1463911369369"></iframe>-->
                     <?php 

					$location = get_field('map');
					
					if( !empty($location) ):
					?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				<?php endif; ?>
                </div>
            </div>
	    </section> <!-- /.content -->
 <?php endwhile ;wp_reset_postdata(); ?>	  
      </div><!-- /.container -->
<?php get_footer(); ?> 