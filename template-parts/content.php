<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package convectium
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title all-post-title">', '</h1>' );

		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

      <?php if( get_field('featured_article_image') ): ?>
           <div class="featured-article-image">
            <span class="featured-in">Featured In </span><img class="article-image" style="img-fluid" src="<?php the_field('featured_article_image'); ?>" />
           </div>
      <?php endif; ?>


	    <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php convectium_posted_on(); ?>
            </div><!-- .entry-meta -->
		<?php endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">

      <?php  if ( has_post_thumbnail() === !is_singular() || is_page('news') ) : ?>
        	<div class="post-thumbnail-image"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?></a></div>
       <?php endif; ?>

        <?php  if ( has_post_thumbnail() === is_singular()) : ?>
            	<div class="post-thumbnail-image-2"><?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?></div>
           <?php endif; ?>

		<?php

			 the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'convectium' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
			get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'convectium' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php convectium_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


