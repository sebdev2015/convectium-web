<?php
/**
* Template name: Consultation Page
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package kultivatemedia
*/


 define( 'WP_USE_THEMES', false ); get_header(); ?>




<header class="masthead">
<div class="header-content">
<div class="header-content-inner">
<h2 id="homeHeading" style="font-weight:bold;">Ready to start on your project?</h2>
<hr>
<h5 style="font-weight:bold; text-transform:uppercase; margin-bottom:60px;"> Some of our areas of expertise are Design, Branding and Product Development.</h5>
</div>
</div>
</header>




<div class="content-area container">
 <section id="consultation">
      <div class="container">
     <!--  	Business 2 Consumer -->

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile;
				else :
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
				endif;
			?>

			<div class="col-md-6 mx-auto">
				<p>Fill out the form below and one of our business development specialist will contact you.</p>
			  <?php echo do_shortcode( '[contact-form-7 id="93" title="Consultation Form"]' ); ?>
			</div>

      </div>
  </section>
</div>












<?php get_footer();