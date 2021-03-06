<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
* Header
*/
global $lumos_options;
$lumos_options = lumos_get_options();
?>
<!DOCTYPE html>
<html
      <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <title>
    <?php wp_title('|', true, 'right');?>
  </title>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>
<body
      <?php body_class(); ?> >

<header id="header">

  <div id="header-info" class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <div id="logo" >
            <h1>
              <a href="<?php echo home_url('/'); ?>">
                <img class="img-fluid d-block mx-auto" src="<?php header_image(); ?>" width="<?php if (function_exists('get_custom_header')) {
                    echo get_custom_header() -> width;
                } else {
                    echo HEADER_IMAGE_WIDTH;
                } ?>" height="<?php if (function_exists('get_custom_header')) {
                    echo get_custom_header() -> height;
                } else {
                    echo HEADER_IMAGE_HEIGHT;
                } ?>" alt="<?php bloginfo('name'); ?>" />
              </a>
            </h1>
          </div><!-- end of #logo -->
      </div>

      <div class="col-md-8">
        <div id="info-contact" class="row align-items-center">
          <div class="col-md-6 col-lg-4 text-center text-md-right">
            <p>Schedule a Consultation: </p>
          </div>

          <div class="col-md-6 col-lg-4 text-center">
            <p>
              Palm Springs 760.327.1509<br />
              Palm Desert 760.346.7431
            </p>
          </div>

          <div class="col-md-12 col-lg-4 text-center">
            <?php
  					echo '<ul class="social-icons text-center py-3 mb-3">';
  					if (!empty($lumos_options['facebook_uid'])) 		echo '<li><a target="_blank" class="icon-facebook" href="' . $lumos_options['facebook_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['twitter_uid'])) 			echo '<li><a target="_blank" class="icon-twitter" href="' . $lumos_options['twitter_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['google_plus_uid'])) 	echo '<li><a target="_blank" class="icon-google-plus" href="' . $lumos_options['google_plus_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['youtube_uid'])) 			echo '<li><a target="_blank" class="icon-youtube" href="' . $lumos_options['youtube_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['linkedin_uid'])) 		echo '<li><a target="_blank" class="icon-linkedin" href="' . $lumos_options['linkedin_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['yelp_uid'])) 				echo '<li><a target="_blank" class="icon-yelp" href="' . $lumos_options['yelp_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['blogger_uid'])) 			echo '<li><a target="_blank" class="icon-blogger" href="' . $lumos_options['blogger_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['instagram_uid'])) 		echo '<li><a target="_blank" class="icon-instagram" href="' . $lumos_options['instagram_uid'] . '">'.'</a></li>';
  					if (!empty($lumos_options['foursquare_uid'])) 	echo '<li><a target="_blank" class="icon-foursquare" href="' . $lumos_options['foursquare_uid'] . '">'.'</a></li>';
  					echo '</ul><!-- end of .social-icons -->';
  					?>
          </div>
        </div>
        <div class="sticky-container sticky">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div id="main-nav" class="row">
                  <div class="col-12 p-0">
                    <nav id="access">
                        <ul class="mobile-nav d-md-none">
                          <li>
                            <a href="<?php echo home_url('/contact/'); ?>">
                              <i class="fa fa-envelope" aria-hidden="true">
                              </i>
                            </a>
                          </li>
                          <li>
                            <a href="tel:+1-">
                              <i class="fa fa-phone" aria-hidden="true">
                              </i>
                            </a>
                          </li>
                        </ul>
                        <?php wp_nav_menu(array( 'theme_location' => 'header-nav','menu_class' => 'sf-menu menu-slick')); ?>
                      </nav><!-- nav#access -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- container-fluid -->
        </div>
      </div>
    </div>
  </div>
  <!-- .container-->
  </div>
  <!-- .container-->

</header>
<!-- #header -->


<div id="main">

  <div class="float-box d-none d-md-block">
    <a class="clicker" href="<?php echo home_url(''); ?>">
      <span>Contact Us | Location
      </span>
    </a>
    <div class="row">
	    	<div class="col col-6">
          <address>
          <span>Palm Springs</span><br/>
          1900 E. Tahquitz Canyon Way<br/>
          Suite A1<br/>
          Palm Springs, CA 92262
          </address>
          <address>
            <span>Palm Desert</span><br/>
            72-780 El Paseo<br/>
            Suite E-1<br/>
            PalmDesert, CA 92260
          </address>
	      <a href="<?php echo home_url('/location/'); ?>">
	        <img class="img-fluid mt-2" src="<?php echo get_template_directory_uri(); ?>/img/map-ps.png" alt="Location" />
	      </a>
        <a href="<?php echo home_url('/location/'); ?>">
	        <img class="img-fluid mt-2" src="<?php echo get_template_directory_uri(); ?>/img/map-pd.png" alt="Location" />
	      </a>
	    </div>
	    <!-- end of col-1-3 -->
	    <div class="col col-6">
	      <?php echo do_shortcode('[contact-form-7 id="136" title="Contact form 1"]') ?>
	    </div>
	    <!-- end of col-1-3 -->
	    <div class="col col-md-4 links" hidden>
  		  <div id="flex-item" class="w-100 d-block">
  		      <a href="<?php echo home_url(''); ?>">Current Specials
  		      </a>
  		      <a href="<?php echo home_url(''); ?>">Get Directions
  		      </a>
  		      <a href="<?php echo home_url('/photo-gallery/'); ?>">Photo Gallery
  		      </a>
  		  </div><!-- flex-item -->
	    </div>
	    <!-- end of col-1-3 -->
    </div><!-- row -->
  </div>
  <!-- end of float-box -->
