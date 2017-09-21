<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package convectium
 */

get_header(); ?>


<header class="masthead">
    <div class="header-content">
        <div class="header-content-inner">
                <?php if ( is_singular() ) :
                the_title( '<h1 id="homeHeading" class="entry-title">', '</h1>' );
                else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif; ?>
            </div><!-- .entry-meta -->
        </div>
    </div>
</header>






	<div id="primary" class="content-area container">
	<div class="row">

		<main id="main" class="site-main col-md-9">
		<?php
		    while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		    endwhile; // End of the loop.
		?>
		</main><!-- #main -->

        <div class="col-md-3"><?php get_sidebar(); ?></div>

    </div><!-- .row -->
	</div><!-- #primary -->

<?php

get_footer();
