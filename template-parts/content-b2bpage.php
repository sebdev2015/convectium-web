<?php
/**
* Template name: B2B Page
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
<h2 id="homeHeading" style="font-weight:bold;">Business Services</h2>
<hr>
<h5 style="font-weight:bold; text-transform:uppercase; margin-bottom:60px;">Solutions for the Cannabis Industry</h5>
</div>
</div>
</header>




<div class="content-area container">
 <section id="b2bpage">
      <div class="container">
     <!--  Business 2 Business -->


			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/b2c-logos/EquipCanna-logo.jpg">
					<p>Solutions and products in post extraction for the cannabis industry.</p>
                    <div class="text-center mx-auto"><a target="_blank" class=" " href="https://equipcanna.com/">Checkout EquipCanna</a></div>
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/b2c-logos/710Shark-logo.jpg">
					<p>Oil Filling Machine for vape carts, disposables and more. </p>
                    <div class="text-center mx-auto"><a target="_blank" class=" " href="https://www.equipcanna.com/products/710-shark-oil-filling-machine?variant=18512968454">Checkout 710Shark Oil Filling Machine</a></div>
				</div>

				<div class="col-md-4">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/b2c-logos/710Seal-logo.jpg">
					<p>Sealing Machine for heat sealing products in blister packaging.</p>
                    <div class="text-center mx-auto"><a target="_blank" class=" " href="https://www.equipcanna.com/products/710-seal-machine?variant=18512968966">Checkout 710Seal Sealing Machine</a></div>
				</div>
			</div>

            <div class="the-post-content">
                <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;
                    else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                    endif;
                ?>
            </div>
			<div class="mx-auto text-center">
						<a class="btn btn-primary btn-xl js-scroll-trigger" href="/consultation">SCHEDULE A CONSULTATION</a>
			</div>
      </div>
  </section>
</div>








<?php get_footer();