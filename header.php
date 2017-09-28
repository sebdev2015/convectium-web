<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package convectium
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">



       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
       <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


	    <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
       <!-- <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

        <!-- Plugin CSS -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


<!-- Custom styles for this template -->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/creative.css" rel="stylesheet">
<!--MAIL CHIMP STYLE-->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><img style="width:180px;" class="img-responsive convectium-logo" src="<?php echo get_template_directory_uri(); ?>/img/convectium-logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto c-nav">
           <li class="nav-item">
             <!-- /*homepage condition*/ -->
               <?php
                if ( is_page('contact-us') || is_page('b2b-services') || is_page('b2c-services') || is_page('consultation') || is_single()) {
                    echo '<a class="nav-link js-scroll-trigger" href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Home</a>';
                } else { echo '<a class="nav-link js-scroll-trigger home" href="/#page-top">Home</a>';
                }
           ?>
             </li>
             <li class="nav-item hide-on-news hide-on-b2b hide-on-b2c hide-on-cons">
                <a class="nav-link js-scroll-trigger" href="/#convectium-services">Services</a>
             </li>
            <li class="nav-item hide-on-news hide-on-b2b hide-on-b2c hide-on-cons">
              <a class="nav-link js-scroll-trigger" href="/#aboutus">About Us</a>
            </li>
            <li class="nav-item hide-on-news hide-on-b2b hide-on-b2c hide-on-cons">
              <a class="nav-link js-scroll-trigger" href="/#convectium-blog">Latest News</a>
            </li>
             <li class="nav-item hide-on-news hide-on-b2b hide-on-b2c hide-on-cons">
              <a class="nav-link js-scroll-trigger" href="/#convectium-staff">Our Team</a>
             </li>

            <li class="nav-item hide-on-news hide-on-b2b hide-on-b2c hide-on-cons">
              <a class="nav-link js-scroll-trigger" href="/#contact">Contact Us</a>
            </li>

            <li class="nav-item contact-us-blog hide-on-home hide-on-contact hide-on-b2b hide-on-b2c hide-on-cons">
              <a class="nav-link js-scroll-trigger" href="/contact-us">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<body id="page-top" <?php body_class(); ?>>
