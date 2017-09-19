<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package convectium
 */

get_header(); ?>


<header class="masthead">
<div class="header-content">
<div class="header-content-inner">
<h2 id="homeHeading" style="font-weight:bold;">LATEST NEWS & EVENTS</h2>
<hr>
<h5 style="font-weight:bold; text-transform:uppercase; margin-bottom:60px;">GET THE LATEST NEWS ABOUT OUR PRODUCTS AND SERVICES</h5>
</div>
</div>
</header>






	<div id="primary" class="content-area container">
	<div class="row">
		<main id="main" class="site-main col-md-9">
            ALL POSTS
		<?php if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



		</main><!-- #main -->

		<div class="col-md-3"><?php get_sidebar(); ?></div>

		</div><!-- .row /-->
	</div><!-- #primary -->

<?php

get_footer();
