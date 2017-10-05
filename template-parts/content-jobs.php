<?php
/**
* Template name: Jobs
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package kultivatemedia
*/

define( 'WP_USE_THEMES', false ); get_header(); ?>


<!-- <header class="masthead">
<div class="header-content">
</div>
</header>
 -->




<div class="content-area container">
 <section id="job">
     
     <!--  Default Content -->


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
	
  </section>
</div>








<?php get_footer();