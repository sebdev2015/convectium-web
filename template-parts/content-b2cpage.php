<?php
/**
* Template name: B2C Page
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
<h2 id="homeHeading" style="font-weight:bold;">Retail Services</h2>
<hr>
<h5 style="font-weight:bold; text-transform:uppercase; margin-bottom:60px;">Solutions for Business to Consumer</h5>
</div>
</div>
</header>


<div class="content-area container">
 <section id="b2cpage">
      <div class="container">
     <!--  	Business 2 Consumer -->

			 <div class="container">
                 <!--  Business 2 Business -->


                <div class="row">


                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/company/BlackoutX.jpg">
                        <p></p>
                        <div class="text-center mx-auto"><a target="_blank" class=" " href="http://blackoutx.com/">Checkout BlackoutX</a></div>
                    </div>

                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/company/HazeSticks.jpg">
                        <p>The &quot;HazeSticks&quot; brand is derived from the name of one of Hendrix’s most iconic songs and his historical desire to bring the cannabis industry to a mainstream audience.</p>
                        <div class="text-center mx-auto"><a target="_blank" class=" " href="https://blackoutx.com/pages/hazesticks">Checkout HazeSticks</a></div>
                    </div>

                    <div class="col-md-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/company/hilifer.jpg">
                        <p>The concept for creating the Hi-Lifer was born out of the frustration we&#39;ve all felt attempting to haphazardly transport our smallest, most-prized possessions without success.</p>
                        <div class="text-center mx-auto"><a target="_blank" class=" " href="https://www.indiegogo.com/projects/hi-lifer-your-discreet-multi-chamber-storage-design#/">Checkout IndieGoGo Project</a></div>
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

      </div>
  </section>
</div>







<?php get_footer();