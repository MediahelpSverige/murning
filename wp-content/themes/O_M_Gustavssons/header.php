<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon.png">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/plugins/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/components.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/developer.css" rel="stylesheet">
	
	<!-- jquery.js -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/jquery-1.12.3.min.js"></script>	
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/bootstrap.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/owl.carousel.min.js"></script> 
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/placeholders.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>    

    <script> var ISOLDIE = false; </script>
	<script>
	     if(ISOLDIE) {
	          alert("Your browser currently does not support this feature. Please upgrade.");
	          window.location = 'http://www.microsoft.com/en-us/download/internet-explorer-9-details.aspx';
	     }	
	</script>
</head>
<?php 
$address = get_theme_mod( 'address_area' ); 
$email = get_theme_mod( 'email' ); 
$telephone_no = get_theme_mod( 'secondary_phone' ); 
?>
<body <?php body_class(); ?>>
	<div class="container">
        <header class="clearfix">
            <div class="logo">
            	<?php if ( get_header_image() ) : ?>
	              <a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
	                  <img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
	              </a>
              	  <?php endif; ?>
            </div>
            <div class="content-right">
                <ul class="nav-col clearfix">
                    <li class="tel-icon"><a href="tel:12345678"><?php echo $telephone_no; ?></a></li>
                    <li class="mail-icon"><a href="mailto:info@o.m.gustavssonsmurning.com"><?php echo $email; ?></a></li>
               </ul>
              <div class="navbar" role="navigation">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <div class="collapse navbar-collapse">
                      <?php wp_nav_menu( array( 
             		 'theme_location' => 'primary', 
             		 'menu_class'        => 'nav navbar-nav',
             		 'menu_id' => 'nav-collapse',
              		 )); 
              		?>
                        </div><!--/.nav-collapse -->
                </div> <!-- /.navbar -->
            </div>
        </header>
